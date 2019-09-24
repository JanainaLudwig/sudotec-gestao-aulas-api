<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Models\Project;
use App\Repositories\Project\ProjectRepository;
use Illuminate\Http\Request;

/**
 * @group Projects
 */
class ProjectController extends Controller
{

    private $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * All projects
     *
     * @authenticated
     * @return Project[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return response()->json(['data' => Project::all()]);
    }

    /**
     * Create project
     *
     * @authenticated
     * @bodyParam name string required Name of the project
     * @bodyParam description string Description of the project
     * @bodyParam image image required Image of the project
     * @bodyParam status string required Status of the project (enum: ['active', 'inactive'])
     */
    public function store(StoreProjectRequest $request)
    {
        $project = $this->projectRepository->create($request);

        return response()->json(['data' => $project]);
    }

    /**
     * Get project
     *
     * @authenticated
     */
    public function show(Project $project)
    {
        return response()->json(['data' => $project]);
    }

    /**
     * Update project
     *
     * @authenticated
     * @bodyParam name string required Name of the project
     * @bodyParam description string Description of the project
     * @bodyParam image image required Image of the project
     * @bodyParam status string required Status of the project (enum: ['active', 'inactive'])
     */
    public function update(UpdateProjectRequest $request, Project $project, ProjectRepository $projectRepository)
    {
        $project = $this->projectRepository->update($project, $request);

        return response()->json(['data' => $project]);
    }

    /**
     * Delete project
     *
     * @authenticated
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->projectRepository->delete($project);

        return response()->json(['message' => 'Project deleted']);
    }
}
