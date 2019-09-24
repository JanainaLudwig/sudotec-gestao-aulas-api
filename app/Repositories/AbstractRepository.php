<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function find($id) : Model
    {
        return $this->model::find($id);
    }

    public function all() : Collection
    {
        return $this->model::all();
    }

    public function create($data) : Model
    {
        $model = new $this->model;

        $model->fill($data->only($model->getFillable()));
        $model->save();

        return $model;
    }

    public function update(Model $model, $data) : Model
    {
        $model->fill($data->only($model->getFillable()));
        $model->save();

        return $model;
    }

    public function delete(Model $model)
    {
        $model->delete();
    }
}
