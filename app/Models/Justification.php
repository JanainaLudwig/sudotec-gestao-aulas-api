<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    protected $fillable = ['attendance_id', 'justification'];
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
