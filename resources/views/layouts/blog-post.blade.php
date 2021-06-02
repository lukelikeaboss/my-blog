<div class="card border-0 shadow-sm">
  <a href="{{ Route('show.post.details',$post->id) }}">
    <img src="{{asset('storage/images/'.$post->featured_image_url)}}" alt="picturescque" class="img-fluid card-img-top w-100 image-fit" height="500" />
  </a>

  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <h6> {{$post->author}}.{{$post->category->name}}</h6> 
    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->post, 250) }}

    </p>
    
  </div>
  <div class="card-footer">
    <div class="row">
      <p>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
      <a href="{{ Route('show.post.details',$post->id) }}" class="btn btn-primary ml-auto">Read More</a>
    </div>
  </div>
</div>