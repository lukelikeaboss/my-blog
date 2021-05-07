@extends('layouts.app')

@section('content')

<div class="container">

@if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
    
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
    {{ session('error') }}
    </div>
    
@endif

    <div class="row justify-content-center">
        <h2 class="bg-warning"> CATEGORIES</h2>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <section class="card border-0 shadow-sm">
                <section class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">All Category</h4>
                        <a href="{{ route('create.category') }}" class="btn btn-danger ml-auto ">
                            <i class="fa fa-plus " aria-hidden="true" ></i>Add category</a>
                    </div>
                </section>
                <div class="card-body">
                    <table id="datatable" class="table table-secondary table-bordered table-striped table-hover">
                        <thead>
                            <tr  class="bg-success">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Platform</td>
                            <td>Created at@</td>
                            <td>Actions</td>
                            </tr>
                        </thead>

                        @foreach ($categories as $category )
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{$category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="{{route('show.project',$category->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('edit.category', $category->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete.category', $category->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
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