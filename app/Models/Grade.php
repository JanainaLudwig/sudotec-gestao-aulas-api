<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'course_id', 'teacher_id', 'name',
        'resources', 'shift', 'initial_date',
        'final_date', 'registration_date_limit',
    ];

    protected $dates = ['initial_date', 'final_date', 'registration_date_limit'];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
