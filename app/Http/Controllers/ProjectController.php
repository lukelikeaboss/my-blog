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
     projects::create([

        'name'=> $request->name,
        'platform' => $request->platform,
        'description'=> $request->description,
        'code_url'=>$request->code_url,
        'featured_image_url'=>$file_name,
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

        $related_projects = Projects::where('platform', 'LIKE', '%'.$project->platform.'%')->get();

        return view ('projects.detail-project', compact('project', 'related_projects'));

    }
    public function showProjectList(Request $request)
    {
      
        if($request ->has('platform')){
            $projects = Projects:: where('platform', 'LIKE', '%'.$request->platform."%")->get();
        }
             else{
                $projects = Projects::all();
                }

        return view('projects.projects-list', compact('projects'));
    }
}
