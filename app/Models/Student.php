<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'gender', 'rg', 'cpf', 'email', 'phone', 'hometown', 'address', 'birth_date'];
    protected $dates = ['birth_date'];

    public function grade()
    {
        return $this->belongsToMany(Grade::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
