@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Edit Companies</li>
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
                                <h3>Edit Companies  <a href="{{route('companies_list')}}" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Back</a></h3>
                                
                            </div>
                            
                <form action="{{route('update_company',$company->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$company->id}}" name="id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                 <label for="">Name</label> 
                                <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                          
                            </td>
                            <td>
                                <label for="">Logo</label> 
                                <input type="file" name="logo"  class="form-control">
                                <input type="hidden" name="old_logo"  class="form-control" value="{{$company->logo}}">
                                <img src="../uploads/{{$company->logo}}" alt="" height="50px" width="50px">
                                @error('logo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                 <label for="">Website</label> 
                                <input type="text" class="form-control"  name="website" value="{{$company->website}}">
                                @error('website')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                          
                            </td>
                       
                            <td><input type="submit" value="Edit" class="btn btn-success btn-block"></td>

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
 