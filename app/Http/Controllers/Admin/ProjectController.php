<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Importazione Models:
use App\Models\Project;

//Importazione Requests:
use App\Http\Requests\StoreProjectRequest;

//Importazione Helpers:
use Illuminate\Support\Str;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects')); 
        /*Puoi farlo anche con array associativo ovvero:
        return view('admin.projects.index', [
            'projects'=> $projects,
        ]);*/
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        
        // $slug = Str::slug($data['title']);
        // dd($slug);
        
        // $newProject = Project::create([
            //     'title' => $data['title'],
            //     'slug' => $slug,
            //     'description' => $data['description'],
            //     'link' => $data['link'],
            //     'preview' =>$data['preview']
            // ]);
            
            //--------- ALTERNATIVA ----------
            
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $newProject = Project::create($data);

        return redirect()->route('admin.projects.show', $newProject->id)->with('success', 'Progetto aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
        /*Puoi farlo anche con array associativo ovvero:
        return view('admin.projects.show', [
            'project'=> $project,
        ]);*/
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
        //
    }
}