@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Add Companies</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
   

                <div class="col-md-12">
                    <div class="row">
                            <div>
                                <h3>Add Companies  <a href="{{route('companies_list')}}" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Back</a></h3>
                                
                            </div>
                            
                        <form action="{{route('store_company')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                                <table class="table table-bordered" style="margin-top:10px" >
                            
                                    <tr>
                                        <th style="width:20%; text-align:center">Name</th>
                                        <td><input type="text" value="" class="form-crontrol" name="name"></td>
                                        <th style="width:20%; text-align:center">Logo</th>
                                        <td><input type="file" value="" class="form-crontrol" name="logo"></td>
                                        <th style="width:30%; text-align:center">Website</th>
                                        <td><input type="text" value="" class="form-crontrol" name="website"></td>
                                        <th><input type="submit" value="Add"  class=" btn btn-sm btn-primary"></th>
                                    
                                    </tr>

                            
                                </table>
                        </form>
                    </div>
                </div>
        
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  @endsection
 