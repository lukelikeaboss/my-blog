@extends('layouts.app')


@section('content')




<div class="container">
<!--First content:name, id and action buttons-->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <h4> Project {{ $project->id }}: {{ $project->name }}</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="btn-group">
            <a href="{{ route('project') }}" class="btn btn-success">Back</a>  
            <a href="#" class="btn btn-outline-danger">SHARE</a>
            <a href="{{ route('edit.project', $project->id) }}" class="btn btn-success">EDIT</a>    
        </div>
    </div>
</div>
<hr>



<!--end of content:name, id and action buttons-->


<div class="row justify-content center">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="card">

            <div class="card-header bg-white">
                <div class="row mx-1">
                <h4> Project description:</h4>
                <a href="{{ $project->code_url }}" target="_blank" class="btn btn-outline-success btn-sm ml-auto mx-1">Go To Repository</a>
                </div>
            </div>
            <div class="card-body">
                <p>{{ $project->description }}</p>
            <div class="card-footer">
                <div class="row">
                    <p>{{ \Carbon\carbon::parse($project->created_at)->diffforhumans() }}
                    <p class="ml-auto">{{ $project->platform }}</p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Related Projects</h4>
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
            <div class="card-footer">
            </div>
        </div>
        
    </div>
</div>















<!--second content: description, date, platform and redirect button-->
<!--eND OF content-->

<!--third content-->


<div class="row justify-content-center">
<div class="card-body">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <H3 class="TEXT-CENTER FONT-WEIGH-BOLD">PROJECT IMAGES</H3>
        <div class="card mb-2">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/velar.jpg')}}" alt="Range Rover" class="w-100 image-fit" height="500">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/y62.jpg')}}" alt="Nissan Patrol" class="w-100 image-fit" height="500">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/lc200.jpg')}}" alt="Toyota Landcruiser" class="w-100 image-fit" height="500">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    
        </div>
    </div>
</div>

          <!--end of content-->








@endsection