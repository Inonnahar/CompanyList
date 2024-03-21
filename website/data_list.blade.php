@extends('website/layout')

@section('content')

  <main id="main">

  <section class="section dashboard">
      
       
          
                <div class="col-md-12"  id="list">
                    <div class="row">
                            
                        <table class="table table-bordered" style="margin-top:10px" >
                            <thead>
                                <tr>
                                    <th style="width:10%; text-align:center">SL</th>
                                    <th style="width:20%; text-align:center">Name</th>
                                    <th style="width:20%; text-align:center">Logo</th>
                                    <th style="width:30%; text-align:center">Website</th>
                                    
                                
                                </tr>
                            </thead>
                            <tbody>
                        <?php 

                    

                            foreach($company as $r=>$d){
                            
                        ?>

                                <tr>
                                    <td style="width:10%; text-align:right">{{++$r}}  </td>
                                    <td style="width:20%">{{$d->name}}</td>
                                    <td style="width:20%"><img src="uploads/{{$d->logo}}" alt="" height="100px" width="100px"></td>
                                    <td style="width:30%">{{$d->website}}</td>
                        
                                  
                                </tr>

                                <?php
                        

                                }
                                ?>
                            </tbody>
                        </table>
                       

                    </div>
                </div>
        
       
    </section>
    <section class="section dashboard">
      
       
          
                <div class="col-md-12"  id="list">
                    <div class="row">
                          
                        <table class="table table-bordered" style="margin-top:10px" >
                            <thead>
                                <tr>
                                    <th style="width:10%; text-align:center">SL</th>
                                    <th style="width:20%; text-align:center">First Name</th>
                                    <th style="width:20%; text-align:center">Last Name</th>
                                    <th style="width:10%; text-align:center">Company Id</th>
                                    <th style="width:20%; text-align:center">Email</th>
                                    <th style="width:20%; text-align:center">Phone</th>
                                   
                                
                                </tr>
                            </thead>
                            <tbody>
                        <?php 

                    

                            foreach($employee as $k=>$c){
                            
                        ?>

                                <tr>
                                    <td style="width:10%; text-align:right">{{++$k}}  </td>
                                    <td style="width:20%">{{$c->first_name}}</td>
                                    <td style="width:20%">{{$c->last_name}}</td>
                                    <td style="width:20%">{{$c->company_id}}</td>
                                    <td style="width:10%">{{$c->email}}</td>
                                    <td style="width:10%">{{$c->phone}}</td>
                        
                                 
                                </tr>

                                <?php
                        

                                }
                                ?>
                            </tbody>
                        </table>
                      
                    </div>
                </div>
        
         
    </section>
  
  </main><!-- End #main -->

  @endsection