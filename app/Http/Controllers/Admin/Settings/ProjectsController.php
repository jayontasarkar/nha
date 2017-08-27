<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectManagementFormRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('starting_date', 'desc')
            ->orderBy('ending_date', 'desc')->get();

        return view('admin.settings.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\ProjectManagementFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectManagementFormRequest $request)
    {
        Project::create($request->all());

        return redirect()->route('settings.projects.index')
            ->withSuccess('New project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.settings.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\ProjectManagementFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectManagementFormRequest $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('settings.projects.index')->withSuccess(
            '"' . $project->title . '" project info updated successfully'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $id)
    {
        //
    }
}
