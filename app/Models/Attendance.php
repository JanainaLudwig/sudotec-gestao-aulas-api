<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['lesson_id', 'student_id', 'presence'];

    protected $casts = [
        'grade_date' => 'datetime:Y-m-d',
    ];

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function student() {
        return $this->belongsTo(Student::class)->orderBy('name');
    }

    public function justification()
    {
        return $this->hasOne(Justification::class);
    }

    public function needsJustification()
    {
        return $this->presence === 'J';
    }
}
