@extends('layouts.master')

@section('title', "My-post" )


@section('content')


<div class="container">
    <!--row with list categories-->
    <div class="row my-3">
        @foreach ($categories as $category )
        <a href="{{ route('show.post.list', ['category'=>$category->id]) }}" class=" btn @if(request('category')==$category->id) btn-success @else btn-outline-secondary @endif rounded-pill mx-1">{{ $category->name }}</a>     
        @endforeach
        </div>
        <!-- end of row with categories-->
    <div class="row justify-content-center">
        @foreach ($posts as $post )
        <div class="col-lg-5 col-md-5 col-sm-12 my-5">
            @include('layouts.blog-post')
        </div>
            
        @endforeach
@endsection

