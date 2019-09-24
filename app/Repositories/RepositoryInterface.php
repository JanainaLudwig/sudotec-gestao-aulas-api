<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function find($id) : Model;

    public function all() : Collection;

    public function create($data) : Model;

    public function update(Model $model, $data) : Model;

    public function delete(Model $model);
}
