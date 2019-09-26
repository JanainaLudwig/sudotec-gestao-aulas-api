<?php

namespace App\Models;

use App\Traits\Image\HasImage;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasImage;

    protected $fillable = ['name', 'description', 'image', 'status'];
    protected $filesDirectory = 'projects';

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
