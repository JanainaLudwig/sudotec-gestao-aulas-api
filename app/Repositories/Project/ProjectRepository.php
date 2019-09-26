<?php


namespace App\Repositories\Project;


use App\Models\Project;
use App\Repositories\AbstractRepository;
use App\Traits\Image\ModelHasImageRepository;

class ProjectRepository extends AbstractRepository
{
    protected $model = Project::class;
}
