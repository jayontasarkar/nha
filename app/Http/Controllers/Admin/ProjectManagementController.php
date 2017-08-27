<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectManagementController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('starting_date', 'desc')
            ->orderBy('ending_date', 'desc')->get();

        return view('admin.projectmgt.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('admin.projectmgt.show', compact('project'));
    }
}
