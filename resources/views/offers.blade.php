@extends('layouts.master')
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active ratio ratio-16x9 bg-gradient img-fluid">
        <img src="{{asset('images/velar.jpg')}}" alt="Range Rover" class="w-100 image-fit" height="500">
        <div class="carousel-caption">
            <h3>Range Rover Velar</h3>
            <p>Find an offer from us</p>
          </div>
      </div>
      <div class="carousel-item  bg-dark img-fluid">
        <img src="{{asset('images/y62.jpg')}}" alt="Nissan Patrol" class="w-100 image-fit" height="500">
        <div class="carousel-caption">
            <h3>Nissan Patrol Y63</h3>
            <p>2020 come and book a test drive
            !</p>
          </div>
      </div>
      <div class="carousel-item ratio ratio-16x9 bg-dark img-fluid">
        <img src="{{asset('images/lc200.jpg')}}" alt="Toyota Landcruiser" class="w-100 image-fit" height="500">
        <div class="carousel-caption">
            <h3>Land Cruiser 200 series</h3>
            <p>The car infornt of you is always a TOYOTA. BUY ONE TOO!</p>
          </div>
      </div>
      <div class="carousel-item ratio ratio-16x9 bg-dark img-fluid">
        <img src="{{asset('images/brabus.jpg')}}" alt="Mercedes G63" class="w-100 image-fit" height="500">
        <div class="carousel-caption">
            <h3>MERCEDES G63 BRABUS</h3>
            <p>POWER BEYOND YOUR IMAGINATION Driving</p> is always so much fun!</p>
          </div>
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  



@endsection