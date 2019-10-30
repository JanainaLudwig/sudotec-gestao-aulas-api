<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['grade_id', 'description', 'grade_date'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function frequency() {
        $total = $this->attendances()->count();
        $presenceCount = $this->attendances()->whereIn('presence', ['P', 'J'])->count();

//        return "total: $total;;;;;; presencecount: $presenceCount";

        return number_format(($presenceCount / $total) * 100, 0);

    }
}
