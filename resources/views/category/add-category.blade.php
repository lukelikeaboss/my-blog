@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3 class="font-weight-bold text-success "><i class="fa fa-edit"></i> Add New Category</h3>
    </div>
<hr>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form action="{{ route('store.category') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                             <label> Name:</label>
                             <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                       
                       <button type="submit" class="btn btn-success w-50">Submit</button>
                        
                       
                       
                      
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>




@endsection