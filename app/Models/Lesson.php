<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['grade_id', 'description', 'grade_date'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function ($builder) {
            $builder->orderBy('grade_date', 'asc');
        });
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function frequency() {
        $total = $this->attendances()->count();
        $presenceCount = $this->attendances()->whereIn('presence', ['P', 'J'])->count();

        if ($total === 0) {
            return 100;
        }

        return number_format(($presenceCount / $total) * 100, 0);

    }
}
