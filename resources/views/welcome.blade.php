@extends('layouts.master')

@section('title', 'Web Development')

@section('content')



<!--end of navigation bar-->
 <div class="container-fluid">
    <div class="row bg-gradient ">
        <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
            <h1 class="text-primary">Meet {{$name}}</h1>
            <h3><strong>We are building a responsive bootstrap website. This is our first page. Welcome to our first website</strong>
            <p></h3><h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin scelerisque felis eu facilisis auctor.</p> Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer finibus feugiat quam quis porta.<p> Curabitur ut venenatis ex. Donec quis dui pretium, gravida nisl a, volutpat diam. Duis tempus interdum nibh vitae congue. Duis aliquet, est vitae eleifend posuere, est tortor feugiat mauris, maximus mollis risus odio a est. Integer pellentesque, mi quis cursus condimentum, justo ante accumsan libero, quis ultricies purus risus ut turpis.</p><h1 class="bg-black"> <strong> <p> Stay at home.</p></strong></h1>
               
                </h4>
           
           
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
             <img src="{{asset('images/landing.svg')}}" class="img-fluid" alt="Landing image"> 
        </div>
    </div>
</div>

<!--Blog post content-->
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        @foreach ($posts as $post )
        <div class="col-lg-4 col-md-6 col-sm-12">
            @include('layouts.blog-post')
        </div>
        @endforeach

    </div>
</div>
<!--End blog post content-->

<!--Blog project content-->
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        @foreach ($projects as $project )
        <div class="col-lg-4 col-md-6 col-sm-12">
            @include('layouts.project-brief')
        </div>
        @endforeach

    </div>
</div>
<!--End blog project content-->


<div class="card-footer-fluid">@2021 <p>powered by KwetuHub</p></div>



@endsection



