@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
    
@endif
    <div class="row justify-content-center">
        <h2> Your Posts</h2>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <section class="card border-0 shadow-sm">
                <section class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Recent Posts</h4>
                        <a href="{{ route('add.posts') }}" class="btn btn-danger ml-auto ">
                            <i class="fa fa-plus " aria-hidden="true" ></i>Add Post</a>
                    </div>
                </section>
                <div class="card-body">

                    
                        <table id="datatable" class="table table-secondary table-bordered table-striped table-hover">
                            <thead>
                                <tr  class="bg-success">
                                <td>ID</td>
                                <td>Name</td>
                                <td>category_id</td>
                                <td>category</td>
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
                                        <a href="{{ route('show.post', $post->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('edit.post', $post->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete.post', $post->id) }}"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            </a>
                                    </td>

                                   
                                </tr>
                                    
                                @endforeach

                               
                               
                            </tbody>
                        </table>
                   
                </div>
            </section>
        </div>

    </div>
</div>




@endsection
@section('scripts')
<script>
    $(document).ready(function() {
    $('#datatable').DataTable();
} );
    </script>
@endsection