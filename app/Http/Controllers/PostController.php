<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\category;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use App\Models\user;
use App\Notifications\NewPostNotification;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::all();

        return view('posts.posts', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();return view('posts.add-posts', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title'=>'required|unique:posts|max:255',
            'post'=>'required',
        ]);

        if($request->hasFile('image'))
        {
            $allowedfileextensions = ['jpg','jpeg', 'png', 'svg'];
            $file = $request->file('image');
            /**
             * here we specify a file namefor the uploaded file
             * and check whether it has the right extencsion
             */
            $file_name = time().'.'. $file->getclientoriginalname();
            $extension = $file->getclientoriginalextension();
            $check = in_array($extension, $allowedfileextensions);
                if ($check){
                    /**
                     * if the extension is correct, then we save the file.
                     */
                    $saved_file =$file->storeAs('public/images', $file_name);
                }
                else {
                    $saved_file ="wrong_file extenciones monsieur";
                    return redirect()->back();
                }}
                else {
                    $file_name ="no saved pas le file";
                }
        


        Post::create([

            'title'=>$request->title,
            'featured_image_url'=> $file_name,
            'post'=> $request->post,
            'author' => "Sir Kim",
            'user_id' => 1,
            'category_id'=>$request-> category_id ,
        ]);
        $user = User::where('id', 1 )->first();
        if($user){
            $user->notify(new NewPostNotification());
        }

        return redirect() ->route('home')->with ('message', 'post added succefully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::findorFail($id);
            $comments = Coment::where('post_id', $id)->get();
        return view('posts.view-post', compact('post', 'coments'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('posts.edit-posts', compact ('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


            $post = Post::findorFail($id);
            $post->update([
                'title' => $request->title,
                'post' => $request->post,
                'featured_image_url' => $request->image,

            ]);
            return redirect()->route('home');
                    
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      
        $post = post::findOrFail($request->id);
        if ($post->featured_image_url!=null){
            storage::delete('public/images/'.$post->featured_image_url);
        }
        $comments =Comment::where('post_id', $post->id)->delete();


        $post->delete();
        return response()->json();
    
    }
    public function showDetails($id){
        $post = Post::findorFail($id);
        
        return view('posts.detail-post', compact('post'));
    }

public function showPostlist(Request $request)
    {

        $categories = category::all();
        if($request->has('category')){
            $posts = Post::where('category_id', $request->category)->get();
        }
        else{
            $posts = Post::all();
        }
       
        return view('posts.posts-list', compact('posts', 'categories'));
    }

}

