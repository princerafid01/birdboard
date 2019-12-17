<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return  view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        if (auth()->user()->isNot($project->owner)) {
            abort(403);
        }
        return view('projects.show', compact('project'));
    }

    public function store(Request $request)
    {
        $attribute = request()->validate(
            [
                'title' => 'required',
                'description' => 'required',

            ]
        );
        $attribute['owner_id'] = auth()->id();
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'owner_id' => auth()->id(),
        ]);
        return redirect('/projects');
    }
}
