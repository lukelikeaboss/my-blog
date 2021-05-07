@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3 class="font-weight-bold text-success "><i class="fa fa-edit"></i>Edit Posts</h3>
    </div>
<hr>

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form action="{{ route('update.post',$post->id) }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                             <label> Name:</label>
                             <input  name="title" value="{{ $post->title }}" type="text" class="form-control" placeholder="Your Name">
                        </div>
                         <div>    <label>Description:</label>
                            <textarea type="text" class="form-control"  name="post" style="height: 300px;" placeholder="Remember to leave your name here:">
                           {{ $post->post }} </textarea>
                        </div>
                        <div class="form-group mb-2">
                            <input type="file" name="image" value="{{ $post->featured_image_url }}" class="form-control" placeholder="">
                       </div>
<p>
</p><p></p>
                     
                       <button type="submit" class="btn  btn-success mt-2 w-50">Submit</button>
                        
                       
                       
                      
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>




@endsection