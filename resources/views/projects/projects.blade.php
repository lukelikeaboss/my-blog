@extends('layouts.app')

@section('content')

<div class="container">

@if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
    
@endif

    <div class="row justify-content-center">
        <h2> Your Projects</h2>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <section class="card border-0 shadow-sm">
                <section class="card-header">
                    <div class="row">  
                        <h4 class="card-title my-auto ml-3">Recent Projects</h4>
                        <a href="{{ route('add.project') }}" class="btn btn-danger ml-auto ">
                            <i class="fa fa-plus " aria-hidden="true" ></i>Add Project</a>
                    </div>
                </section>
                <div class="card-body">
                    <table id="datatable" class="table table-secondary table-bordered table-striped table-hover">
                        <thead>
                            <tr  class="bg-success">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Platform</td>
                            <td>Created @</td>
                            <td>Actions</td>
                            </tr>
                        </thead>

                        @foreach ($projects as $project )
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->platform }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>
                                <a href="{{route('show.project',$project->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('edit.project', $project->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('delete.project', $project->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
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