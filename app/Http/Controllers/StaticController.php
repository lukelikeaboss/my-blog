<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\projects;
use App\Models\category;


class StaticController extends Controller
{
    //
    public function home(){
        $user= user::findorfail(1);
        $posts = post::inRandomOrder()->get()->take(3);
        $projects = projects::all()->take(3);
        $category = category::all()->take(3);
        return view('welcome', compact('posts', 'projects')) ->with('name', $user->name);
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        $user = user::findorfail(1);
        return view('contact')->with('user',$user);
    }

    public function offers(){
        return view('offers');
    }
    public function showPostDetails($id){
        $categories = category::all()->take(4);
        $post = Post::findOrFail($id);
        return view('posts.detail-post', compact('categories', 'post'));
    }
}
