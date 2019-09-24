<?php


namespace App\Traits\Image;


use Illuminate\Database\Eloquent\Model;

trait ModelHasImageRepository
{
    public function update(Model $model, $data) : Model
    {
        $model->fill($data->only($model->getFillable()));

        if (!isset($data->image)) {
            $model->image = null;
        }

        $model->save();

        return $model;
    }
}
