@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
            <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                    <i class="fa fa-rss fa-4x text-danger" aria-hidden="true" ></i>
                    
                    <h5>Total Posts</h5>
                   <h6>{{ $posts->count() }}</h6>
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 mt-3 ">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center">
                    <i class="fa fa-stack-overflow fa fa-4x mb-3 text-primary"></i>
                    
                    <h5>Total Projects</h5>
                    <h6>{{ $projects->count()}}</h6>
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center ">
                    <i class="fa fa-comments fa-4x text-secondary" aria-hidden="true"></i>
                    
                    <h5>Total Comments</h5>
                    <h6>48</h6>
                </div>
            </div>

        </div>

        
    </div>

    <section class="row justify-content-center mt-5">
        <section class="col-lg-8 col-md-8 col-sm-12">
            <section class="card border-0 shadow-sm">
                <section class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Recent Projects</h4>
                        <a href="{{ route('project') }}" class="btn btn-danger ml-auto ">View Projects</a>
                    </div>
                </section>
                <div class="card-body">
                    <table  class="table table-secondary table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr  class="bg-success">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Platform</td>
                            <td>Created at@</td>
                            <td>Actions</td>
                            
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($projects as $project )
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->platform }}</td>
                                    <td>{{ $project->created_at }}</td>
                                    <td>
                                        <a href="{{ route('edit.project', $project->id ) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            </a>
                                    </td>
                                  
                                </tr>
                                @endforeach
                         
                             
                            </tbody>
                    </table>
                </div>
            </section>
    
        </section>
        <section class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Projects Overview</h4>
                        <a href="{{route('add.project')}}" class="btn btn-danger ml-auto ">
                            <i class="fa fa-plus " aria-hidden="true" ></i>Add Project</a>
                    </div>
                </div>
                <div class="card-body"> 
                    <table class="table table-secondary table-bordered table-striped table-hover">
                        
                            <tr>
                            <th>Html</th>
                            <td>434</td>
                            </tr>
                            <tr>
                                <th>css</th>
                                <td>44</td>
                                </tr>
                                <tr>
                                    <th>Laravel</th>
                                    <td>234</td>
                                    </tr>
                                    <tr>
                                        <th>Java</th>
                                        <td>90</td>
                                        </tr>
                    </table>
    
                </div>
        </section>
    </section>
    <section class="row justify-content-center mt-5">
        <section class="col-lg-7 col-md-7 col-sm-12">
            <section class="card border-0 shadow-sm">
                <section class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Posts</h4>
                        <a href="{{ route('posts') }}" class="btn btn-danger ml-auto ">View Posts</a>
                    </div>
                </section>
                <div class="card-body">
                    <table  class="table table-secondary table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr  class="bg-success">
                            <td>ID</td>
                            <td>Title</td>
                            <td>Post</td>
                            <td>Category</td>
                            <td>Created at@</td>
                            <td>Actions</td>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($post->post, 10) }}</td>
                                    <td>{{ $post->category_id }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('edit.post', $post->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            </a>
                                    </td>

                                   
                                </tr>
                                    
                                @endforeach

                               
                               
                            </tbody>
                    </table>
                </div>
            </section>

    
        </section>

        <section class="col-lg-5 col-md-5 col-sm-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Add posts</h4>
                        <a href="{{route('add.posts')}}" class="btn btn-danger ml-auto ">
                            <i class="fa fa-plus " aria-hidden="true" ></i>view posts</a>
                    </div>
                </div>
                <div class="card-body"> 
                    <table  class="table table-secondary table-bordered table-striped table-hover">
                        
                            <tr>
                            <th>5 star <p>
                                
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            </th>
                            <td>5</td>
                            </tr>
                            <tr>
                                <th>Four stars<p>
                                    
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-warning"></span>
                                <span class="fa fa-star text-white"></span>
                                </th>
                                <td>4</td>
                                </tr>
                                <tr>
                                    <th>Three stars<p>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-white"></span>
                                        <span class="fa fa-star text-white"></span>
                                        <td>3</td>
                                    </th>
    
                                    </tr>
                                    <tr>
                                        <th>Two stars <p>
                                            <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-white"></span>
                                        <span class="fa fa-star text-white"></span>
                                        <span class="fa fa-star text-white"></span>
                                        </th>
                                        
                                        <td>2</td>
                                        </tr>
                                        <th>One star<p>
                                            <span class="fa fa-star text-warning"></span>
                                            <span class="fa fa-star text-white"></span>
                                            <span class="fa fa-star text-white"></span>
                                            <span class="fa fa-star text-white"></span>
                                            <span class="fa fa-star text-white"></span>
                                            <td>1</td>
                                        </th>
                                       
                                        </tr>
                    </table>
    
                </div>
        </section>


    </section>




</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('.datatable').DataTable();
} );
    </script>
@endsection