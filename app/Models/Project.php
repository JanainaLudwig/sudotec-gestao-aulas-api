<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasImage;

    protected $imageDirectory = 'projects';
}
