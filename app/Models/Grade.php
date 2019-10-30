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

    protected $casts = [
        'initial_date' => 'datetime:Y-m-d',
        'final_date' => 'datetime:Y-m-d',
        'registration_date_limit' => 'datetime:Y-m-d',
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
        return $this->belongsToMany(Student::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
