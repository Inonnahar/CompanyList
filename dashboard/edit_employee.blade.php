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
                            
                <form action="{{route('update_employee',$employee->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$employee->id}}" name="id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                 <label for="">First Name</label> 
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$employee->first_name}}">

                                @error('first_name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                          
                            </td>

                            <td>
                                 <label for="">Last Name</label> 
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$employee->last_name}}">
                                @error('last_name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                          
                            </td>

                            <td>
                                 <label for="">Company Id</label> 
                                <input type="text" class="form-control" id="company_id" name="company_id" value="{{$employee->company_id}}">
                               
                          
                            </td>

                            <td>
                                 <label for="">Email</label> 
                                <input type="text" class="form-control"  name="email" value="{{$employee->email}}">
                                @error('email')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                          
                            </td>

                            <td>
                                 <label for="">Phone</label> 
                                <input type="text" class="form-control"  name="phone" value="{{$employee->phone}}">
                                @error('phone')
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
 