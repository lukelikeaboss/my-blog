<div class="card h-100 border-0 shadow-sm">
    <a href="{{ Route('show.project.details',$project->id) }}">
        <img
        src="{{asset('images/y62.jpg')}}" alt="Toyota Landcruiser" class="img-fluid card-img-top w-100 image-fit" height="500" />
      </a>
    <div class="card-body">
      <h5 class="card-title">{{ $project->name }}</h5>
      <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 150) }}
  
      </p>
      
    </div>
    <div class="card-footer">
      <div class="row">
        <p>{{ \Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</p>
        <a href="{{ Route('show.project.details',$project->id) }}" class="btn btn-primary ml-auto">See Details</a>
      </div>
    </div>
  </div>