@extends('layouts.master')
@section('content')


<!--end of navigation bar-->

<div class="container bg-light">
    <h2>About us</h2>
    <div class="card" style="width: 90% ">
    <div class="card-body text-center text-primary">
        <h4 class="card-title bg-white text-center card-text "><p>we are here if you need us welcome to MLK sites.</p>We are MLK Sites welcome to our website feel free to click anything</h4> 
    <a href="{{ route('contact')}}" class="btn btn-success streched-link">Contact us here</a>
    <div class="card-footer-fluid text-center">@ 2021<p> Powered by KwetuHub </p></div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center ">

        @for($i=0; $i< 3; $i++)

            <div class="col-lg-2 col-md-6 col-sm-12 ">
                @include('layouts.services')
            </div>

        @endfor


    </div>
</div>
   





@endsection