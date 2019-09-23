<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

/**
 * @group Projects
 */
class ProjectController extends Controller
{
    /**
     * All projects
     *
     * @return Project[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Project::all();
    }

    /**
     * Create project
     *
     * @bodyParam name string required Name of the project
     * @bodyParam description string Description of the project
     * @bodyParam image image required Image of the project
     * @bodyParam status ['active', 'inactive'] required Status of the project
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Get project
     *
     */
    public function show(Project $project)
    {
        return $project;
    }

    /**
     * Update project
     *
     * @bodyParam name string required Name of the project
     * @bodyParam description string Description of the project
     * @bodyParam image image required Image of the project
     * @bodyParam status ['active', 'inactive'] required Status of the project
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Delete project
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
