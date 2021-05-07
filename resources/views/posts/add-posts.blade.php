@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3 class="font-weight-bold text-success "><i class="fa fa-edit"></i> Add New Posts</h3>
    </div>
<hr>

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4>Leave us a message</h4>
                    <form action="{{ route('create.post') }}" method="post">
                        @csrf
                        @method('POST')
                        <!-- Adding select category-->
                        <div class="form-group">
                            <label for="inputstate">Category</label>
                            <select id="inputstate" name="category_id" class="form-control">
                                <option selected>choose a category:</option>
                                @foreach ($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                
                                    
                                @endforeach
                                
                            </select>

                        </div>
                          <!-- ending select category-->
                        <div class="form-group">
                             <label> Name:</label>
                             <input  name="Title"  type="text" class="form-control" placeholder="Your Name">
                        </div>
                         <div>    <label>Description:</label>
                            <textarea type="text" class="form-control"  name="post" style="height: 300px;" placeholder="Remember to leave your name here:">
                            </textarea>
                        </div>
                        <div class="form-group mb-2">
                            <input type="file" name="image" class="form-control" placeholder="">
                           <label> Url:</label> <input type="text" class="form-control" placeholder="Enter Git url">
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