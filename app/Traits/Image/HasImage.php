<?php


namespace App\Traits\Image;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public static function bootHasImage()
    {
        static::deleted(function (Model $model) {
            Storage::disk('public')->delete($model->attributes['image']);
        });
    }

    public function setImageAttribute($value)
    {
        if (!$value) {
            if ($this->attributes['image']) {
                Storage::disk('public')->delete($this->attributes['image']);
                $this->attributes['image'] = null;
            }

            return;
        }

        $this->attributes['image'] = Storage::disk('public')->putFile("{$this->imageDirectory()}", $value);
    }

    public function getImageAttribute($value)
    {
        if (!$value) {
            return null;
        }

        return Storage::disk('public')->url($value);
    }

    public function imageDirectory()
    {
        return $this->imageDirectory ?? 'images';
    }
}
