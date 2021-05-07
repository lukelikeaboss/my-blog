<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();

        return view('category.categories', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('category.add-category');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        category::create(['name' => $request->name,
        ]);
        return redirect()->route('category');
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
       
       $category = Category::findOrFail($id);
       return view('category.view-category', compact('category'));
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

        $category = category::findOrFail($id);
        
        return view('category.edit-category', compact('category'));
        //
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
        $category = Category::findOrFail($id);
        
        $category->update(['name' =>$request->name,
        ]);
        return redirect()->route('category');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        $default_category = Category::findOrFail(1);

        if($category->id===1){

            //here we check if the user is trying to delete the default category with an alert message
            return redirect()->back()->with('error', "You cannot delete the default category");
        }
        else{
            $posts = Post::where('category_id', $category->id);
            foreach ($posts as $posts){
                //changes the current value of category id to default category

                $post->category_id = $category->id;
                $post->save();//makes the changes to the database.
            }
        }
            $category->delete();
            return redirect()->back()->with("message", "category deleted successfully");
        //
    }
}
