@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Employees</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
       
          
                <div class="col-md-12"  id="list">
                    <div class="row">
                            <div>
                                <h3>Employees Information <a href="{{route('add_employee')}}" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Add employee</a></h3>
                                
                            </div>  
                        <table class="table table-bordered" style="margin-top:10px" >
                            <thead>
                                <tr>
                                    <th style="width:10%; text-align:center">SL</th>
                                    <th style="width:20%; text-align:center">First Name</th>
                                    <th style="width:20%; text-align:center">Last Name</th>
                                    <th style="width:10%; text-align:center">Company Id</th>
                                    <th style="width:20%; text-align:center">Email</th>
                                    <th style="width:20%; text-align:center">Phone</th>
                                    <th style="width:10%; text-align:center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                        <?php 

                    

                            foreach($data as $k=>$d){
                            
                        ?>

                                <tr>
                                    <td style="width:10%; text-align:right">{{++$k}}  </td>
                                    <td style="width:20%">{{$d->first_name}}</td>
                                    <td style="width:20%">{{$d->last_name}}</td>
                                    <td style="width:20%">{{$d->company_id}}</td>
                                    <td style="width:10%">{{$d->email}}</td>
                                    <td style="width:10%">{{$d->phone}}</td>
                        
                                    <td style="width:10%">
                                        <a href="{{route('edit_employee',$d->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <div>
                                                <form action="{{route('delete_employee',$d->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                                </form>
                                            </div> 
                                    </td> 
                                </tr>

                                <?php
                        

                                }
                                ?>
                            </tbody>
                        </table>
                        {{-- Pagination --}}
                        <!-- <div class="d-flex justify-content-center">
                            {!! $data->links() !!}
                        </div> -->
                        {!! $data->appends(['sort' => 'department'])->links() !!}
                    </div>
                </div>
        
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  @endsection
 