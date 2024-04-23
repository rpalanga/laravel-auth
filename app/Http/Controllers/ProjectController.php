<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.projects.fake-index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $request->validated();

        $newProject = new Project();

        if ($request->hasFile("image")) {
            $path = Storage::disk("public")->put("my_image", $request->image);

            $newProject->image = $path;
        }

        $newProject->fill($request->all());

        $newProject->save();    
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // $project= Project::find($project->id);
        return view('admin.projects.show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        if ($request->hasFile('image')) {

            $path = Storage::disk('public')->put('my_image', $request->image);

            $project->image = $path;

        }
        

        // $project->name = $request->name;
        // $project->image = $request->image;
        // $project->description = $request->description;
        // $project->link_repo = $request->link_repo;
        // $project->tech = $request->tech;
        // $project->date_release = $request->date_release;
        $project->fill($request->all());

        $project->save();
        return redirect()->route('admin.projects.show', $project->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete(); 
        return redirect()->route('admin.projects.index');
    }
}
