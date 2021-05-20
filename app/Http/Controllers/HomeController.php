<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\Post;
use App\Models\category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projects = projects::all();
          $posts=Post::all();
        $categories = category::all();
        // return view('home')->with('projects', $projects);
        return view('home', compact('posts', 'projects', 'categories'));

    }
}
