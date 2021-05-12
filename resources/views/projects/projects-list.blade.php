@extends('layouts.master')

@section('title', "My-project" )


@section('content')


<div class="container">
    <!--row with list categories-->
    <div class="row my-3 justify-content-centre bg-light">
        <a href="{{ route('show.project.list', ['platform'=> 'Web Development:php']) }}" class=" btn btn-outline-secondary rounded-pill mx-1">Web Development:php</a>     
        <a href="{{ route('show.project.list',  ['platform'=> 'Web Development:python']) }}" class=" btn btn-outline-secondary rounded-pill mx-1">Web development:python</a>     
        <a href="{{ route('show.project.list',  ['platform'=> 'Android']) }}" class=" btn btn-outline-secondary rounded-pill mx-1">Android</a>     
        <a href="{{ route('show.project.list', ['platform'=> ' web design:Html&css']) }}" class=" btn btn-outline-secondary rounded-pill mx-1"> web design:Html&css</a>     
        </div>
        <!-- end of row with categories-->
    <div class="row justify-content-center">
        @foreach ($projects as $project )
        <div class="col-lg-5 col-md-5 col-sm-12 my-5">
            @include('layouts.project-brief')
        </div>
            
        @endforeach
@endsection

