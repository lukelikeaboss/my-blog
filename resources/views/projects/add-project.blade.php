@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3 class="font-weight-bold text-success "><i class="fa fa-edit"></i> Add New Project</h3>
    </div>
<hr>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form action="{{ route('create.project') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                             <label> Name:</label>
                             <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                         <div>    <label>Description:</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Remember to leave your name here:">
                            </textarea>
                        </div>
                        <div class="form-group">
                             <input type="file"  name="featured_image_url" class="form-control" placeholder="">
                            <label> Url:</label> <input type="text" name="code_url" class="form-control" placeholder="Enter Git url">
                        </div>

                        <div class="form-group">
                            <label for="inputstate">Platform</label>
                            <select id="inputstate" name="platform" class="form-control">
                                <option selected>choose a platform:</option>
                                <option>Web Development:php</option>
                                <option> Web development:python</option>
                                <option> Android</option>
                                <option> web design:Html&css</option>
                            </select>

                        </div>
                       
                       <button type="submit" class="btn btn-success w-50">Submit</button>
                        
                       
                       
                      
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>




@endsection