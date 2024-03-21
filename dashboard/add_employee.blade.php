@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Add employees</li>
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
                                <h3>Add employees  <a href="{{route('employees_list')}}" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Back</a></h3>
                                
                            </div>
                            
                        <form action="{{route('store_employee')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                                <table class="table table-bordered" style="margin-top:10px" >
                            
                                    <tr>
                                        <th style="width:20%; text-align:center">
                                        <select name="company_id" class="form-crontrol">
                                            <?php 
                                            foreach($data as $k=>$d){
                                            ?>
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                            <?php 
                                           }
                                            ?>
                                        </select></th><br>
                                        <th style="width:20%; text-align:center">First Name</th>
                                        <td><input type="text" value="" class="form-crontrol" name="first_name"></td>
                                        <th style="width:20%; text-align:center">Last Name</th>
                                        <td><input type="text" value="" class="form-crontrol" name="last_name"></td>
                                        <th style="width:30%; text-align:center">Email</th>
                                        <td><input type="text" value="" class="form-crontrol" name="email"></td>
                                        <th style="width:30%; text-align:center">Phone</th>
                                        <td><input type="text" value="" class="form-crontrol" name="phone"></td>
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
 