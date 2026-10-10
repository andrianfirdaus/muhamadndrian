<?php

namespace App\Http\Models;

    use App\Models\Project;


class Project Controller extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        return view('page.projects', compact('projects'));


    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('page.project-detail', compact('project'));
    }
    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'teknologi',
        'image',
        'status',
    ];
}
