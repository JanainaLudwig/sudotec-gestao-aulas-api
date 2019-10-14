<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['lesson_id', 'student_id', 'presence'];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function justification()
    {
        return $this->hasOne(Justification::class);
    }
}
