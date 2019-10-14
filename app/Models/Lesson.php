<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['grade_id', 'description'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
