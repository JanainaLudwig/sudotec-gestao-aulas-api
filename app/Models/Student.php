<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Carbon;

class Student extends Model
{
    protected $fillable = ['name', 'gender', 'rg', 'cpf', 'email', 'phone', 'mother_name', 'hometown', 'address', 'birth_date'];
    protected $dates = ['birth_date'];

    protected $casts = [
        'birth_date' => 'datetime:Y-m-d',
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('name', 'asc');
        });
    }

    public function grade()
    {
        return $this->belongsToMany(Grade::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
