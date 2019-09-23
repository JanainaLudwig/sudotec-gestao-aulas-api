<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;

trait HasImage
{
    protected $imageDirectory = 'images';

    public static function bootHasImage()
    {
        //
    }

    public function setImageAttribute($image)
    {
        Storage::disk('public')->putFile("{$this->imageDirectory}", $image);
    }
}
