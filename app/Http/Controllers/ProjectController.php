<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = projects::all();
          

        return view('projects.projects')->with('projects', $projects);   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
      
     projects::create([

        'name'=> $request->name,
        'platform' => $request->platform,
        'description'=> $request->description,
        'code_url'=>$request->code_url,
        'featured_image_url'=>$request->featured_image_url,
        'user_id'=>1,

      ]);
      $projects = projects::all();
          

      return view('home')->with('projects', $projects);
      
      
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

        $project = Projects::findorFail($id);
        return view('projects.view-project', compact('project'));
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
        $project = Projects::findorFail($id);

        return view ('projects.edit-project', compact('project'));
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
        
        $project = projects::findorFail($id);
        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'featured_image_url' => $request->featured_image_url,
            'code_url' => $request->code_url,
            'platform' =>$request->platform,


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
    public function destroy($id)
    {
        $project = projects::findOrFail($id);

        $project->delete();

        return redirect()->back()->with('message', "Deleted Successfully");
       
        //
    }
    public function showDetails($id){
        $project = Projects::findorFail($id);

        return view ('projects.detail-project', compact('project'));

    }
}
