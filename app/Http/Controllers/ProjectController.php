<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use App\Http\Resources\Project\ProjectResource;
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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $projects = $this->projectRepository->all();

        return ProjectResource::collection($projects);
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
        return new ProjectResource($project);
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
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project = $this->projectRepository->update($project, $request);

        return new ProjectResource($project);
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
