@extends('dashboard/layout')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Companies</li>
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
                                <h3>Companies Information <a href="{{route('add_company')}}" id="create" class="btn btn-sm btn-primary" style="float:right ; width:10%;">Add companies</a></h3>
                                
                            </div>  
                        <table class="table table-bordered" style="margin-top:10px" >
                            <thead>
                                <tr>
                                    <th style="width:10%; text-align:center">SL</th>
                                    <th style="width:20%; text-align:center">Name</th>
                                    <th style="width:20%; text-align:center">Logo</th>
                                    <th style="width:30%; text-align:center">Website</th>
                                    
                                <th style="width:10%; text-align:center">Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                        <?php 

                    

                            foreach($data as $k=>$d){
                            
                        ?>

                                <tr>
                                    <td style="width:10%; text-align:right">{{++$k}}  </td>
                                    <td style="width:20%">{{$d->name}}</td>
                                    <td style="width:20%"><img src="uploads/{{$d->logo}}" alt="" height="100px" width="100px"></td>
                                    <td style="width:30%">{{$d->website}}</td>
                        
                                    <td style="width:10%">
                                        <a href="{{route('edit_company',$d->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <div>
                                                <form action="{{route('delete_company',$d->id)}}" method="post">
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
                        <div class="d-flex justify-content-center">
                             {!! $data->links() !!} 
                            <!-- {!! $data->appends(['sort' => 'department'])->links() !!} -->
                        </div>

                    </div>
                </div>
        
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  @endsection
 