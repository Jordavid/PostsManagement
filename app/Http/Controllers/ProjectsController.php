<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Project;
use App\Facebook;
use App\Mail\ProjectCreated;

class ProjectsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    //    $this->middleware('can:update,project');
    }

    public function index(){

       // $projects = Project::where('owner_id', auth()->id())->get();

        $projects = auth()->user()->projects;
        
        return view('projects.index', compact('projects'));

    }


    public function create(){
        
        return view('projects.create');
        
    }

    public function store(){

        $validatedAttr = $this->validateProject();

        $validatedAttr['owner_id'] = auth()->id();


        $project = Project::create($validatedAttr);

        \Mail::to('david@localhost.com')->send(
            new ProjectCreated($project)
        );
        
        return redirect('/projects');
    }
    
    public function show(Project $project)
    {
       /*  dd($facebook);
        dd(app('facebook')); */

        /* if($project->owner_id != auth()->id()){
            abort(403);
        } */

        // Using Polocy to check!

       $this->authorize('update', $project);

        return view('projects.show', compact('project'));
        
    }

    public function edit(Project $project){

       // abort_if($project->owner_id !== auth()->id(), 403);
        /* if($project->owner_id != auth()->id()){
            abort(403);
        } */

        //WIth the ProjectPolicy

       $this->authorize('update', $project);

        return view('projects.edit', compact('project'));
        
    }

    public function update(Project $project){

        $this->authorize('update', $project);
        
        $project->update($this->validateProject());

        return redirect('/projects/'.$project->id);
    }

    public function destroy(Project $project){
        $this->authorize('update', $project);

        $project->delete();

        return redirect('/projects');
    }

    protected function validateProject()
    {
        return request()->validate(
            [
                'title' => ['required', 'min:5'],

                'description' => ['required', 'min:10']
            ]
        );
    }


}
