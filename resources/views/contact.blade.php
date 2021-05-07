@extends('layouts.master')

@section('content')
<!--end of navigation bar-->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
            <div class="card border-0 shadow">
                <div class="card-body text-center">
                    <i class="fa fa-phone fa fa-3x mb-3 text-success"></i>
                    
                    <h5>{{$user->name}}</h5>
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 mt-3 ">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center">
                    <i class="fa fa-address-card fa fa-3x mb-3 text-success"></i>
                    
                    <h5>+254722442566</h5>
                    <!--{{Carbon\Carbon::parse($user->created_at)->format('l, F js Y, h:i A')}} -->
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center ">
                    <i class="fa fa-envelope fa fa-3x mb-3 text-success"></i>
                    
                    <h5>{{$user->email}}</h5>
                </div>
            </div>

        </div>

        
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form>
                        <div class="form-group">
                             <label> Name:</label>
                            
                            <input type="text" class="form-control" placeholder="Remember to leave your name here:"><label> Comment:</label></div>
                        <div class="form-group">
                             <input type="text" class="form-control" placeholder="Leave us a feedback and we will get back to you">
                            <label> Email:</label> <input type="email" class="form-control" placeholder="write your email"></div>
                        <div class="form-group">  <input type="checkbox" class="form-check-input"/>
                            <label>Click to get more info from us</label></div>
                       <button type="submit" class="btn btn-success w-50">Submit</button>
                        
                       
                       
                      
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>





@endsection