<!-- Navigation Bar-->
<nav class="navbar navbar-expand-md bg-gradient navbar-dark">
    <a href="/" class="navbar-brand">
    <img src="{{ asset('images/logo.png')}}" class="img-fluid logo-image" alt="Brand Logo">
    </a>
    <button type="button" data-target="#main-navigation"
    class="navbar-toggler navbar-light" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav ml-auto navbar-dark">
            
            <li  class="nav-item"> <a class="nav-link" href="/">Home</a></li>
            <li  class="nav-item"> <a class="nav-link" href="{{route('about')}}">About</a></li>
            <li  class="nav-item"> <a class="nav-link" href="{{route('show.post.list')}}">Blog</a></li>
            <li  class="nav-item"> <a class="nav-link" href="{{route('show.project.list')}}">My Work</a></li>
            <li  class="nav-item"> <a class="nav-link" href="{{route('contact')}}">Contacts</a></li>
            <li  class="nav-item"> <a class="nav-link" href="{{route('offers')}}">Offers</a></li>
            @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-success rounded-pill px-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-success rounded-pill px-4 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                <a class="dropdown-item " href="{{route('home')}}">dashboard</a>
                                <{{ asset('') }} class="dropdown-item " href="{{route('project')}}">projects</a>
                                <a class="dropdown-item " href="{{route('posts')}}">posts</a>
                                <a class="dropdown-item " href="{{route('category')}}">categories</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
        </ul>
    </div>
</nav>



