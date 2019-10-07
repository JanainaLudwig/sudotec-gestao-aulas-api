<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'course_id', 'teacher_id', 'name',
        'resources', 'shift', 'initial_date',
        'final_date', 'registration_date_limit',
    ];

    protected $dates = ['initial_date', 'final_date', 'registration_date_limit'];
}
