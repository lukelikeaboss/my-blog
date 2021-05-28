@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt-5">
    <div class="col-lg-3 col-md-3 col-sm-12 mt-3 ">
        <a href="{{ route('category') }}" >
            <div class="card h-100 border-0 shadow">
                <div class="card-body text-center">
                    <i class="fa fa-stack-overflow fa fa-4x mb-3 text-primary"></i>
                    
                    <h5 class="text-dark">Total categories</h5>
                    <h6>{{ $categories->count()}}</h6>
                </div>
            </div>

    </div>

        <div class="col-lg-3 col-md-3 col-sm-12 mt-3">
            <a href="{{ route('posts') }}" > <div class="card border-0 shadow h-100">
                
                <div class="card-body text-center">
                    <i class="fa fa-rss fa-4x text-danger" aria-hidden="true" ></i>
                    
                    <h5>Total Posts</h5>
                   <h6>{{ $posts->count() }}</h6>
                </div>
            </div></a>
           

        </div>


        <div class="col-lg-3 col-md-3 col-sm-12 mt-3 ">
           <a href="{{ route('project') }}"> <div class="card h-100 border-0 shadow">
            <div class="card-body text-center">
                <i class="fa fa-stack-overflow fa fa-4x mb-3 text-primary"></i>
                
                <h5>Total Projects</h5>
                <h6>{{ $projects->count()}}</h6>
            </div>
        </div></a>

        </div>


        <div class="col-lg-3 col-md-3 col-sm-12 mt-3">
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
                                <tr id="project_id_{{ $project->id }}">
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->platform }}</td>
                                    <td>{{ $project->created_at }}</td>
                                    <td>
                                        <a href="{{ route('edit.project', $project->id ) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)"class="btn btn-danger btn-sm delete-project"
                                            data-id="{{ $project->id }}">
                                                <i class="fa fa-trash project_icon_{{ $project->id }}"></i>
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
                                <tr id="post_id_{{ $post->id }}">
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($post->post, 10) }}</td>
                                    <td>{{ $post->category_id }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('edit.post', $post->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)"class="btn btn-danger btn-sm delete-post"
                                        data-id="{{ $post->id }}">
                                            <i class="fa fa-trash post_icon_{{ $post->id }}"></i>
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
<script rel="type/javascript">
    $(document).ready(function(){

        $('.datatable').DataTable();

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click','.delete-project', function(){

            var id =$(this).data("id");
            confirm("are you su=re you want to delete");


            $('.project_icon_'+id).removeClass('fa-trash');
            $('.project_icon_'+id).addClass('fa-spinner fa-spin');


            $.ajax({
                type:"POST",
                url:"{{ route('delete.project') }}",
                data:{'id':id},
                success:function (data){

                    $("#project_id_"+id).remove();

                    $('.project_icon_'+id).addClass('fa-trash');
                    $('.project_icon_'+id).removeClass('fa-spinner fa-spin');
                },
                error:function(data){
                    $('.project_icon_'+id).addClass('fa-trash');
                    $('.project_icon_'+id).removeClass('fa-spinner fa-spin');

                    console.log('Error:',data);

                    swal.fire({
                        title:'iza joh!',
                        text:'rieng ni mbawkni',
                        icon:'error',
                        confirmButtonText:'umenauwo?'
                    })  
                }
            })

        })




        $('body').on('click','.delete-post', function(){

            var id =$(this).data("id");
            confirm("are you sure you want to delete");


            $('.post_icon_'+id).removeClass('fa-trash');
            $('.post_icon_'+id).addClass('fa-spinner fa-spin');


            $.ajax({
                type:"POST",
                url:"{{ route('delete.post') }}",
                data:{'id':id},
                success:function (data){

                    $("#post_id_"+id).remove();

                    $('.post_icon_'+id).addClass('fa-trash');
                    $('.post_icon_'+id).removeClass('fa-spinner fa-spin');
                },
                error:function(data){
                    $('.post_icon_'+id).addClass('fa-trash');
                    $('.post_icon_'+id).removeClass('fa-spinner fa-spin');

                    console.log('Error:',data);

                    swal.fire({
                        title:'iza joh!',
                        text:'rieng ni mbawkni',
                        icon:'error',
                        confirmButtonText:'umenauwo?'
                    })  
                }
            })

})


});


</script>

@endsection