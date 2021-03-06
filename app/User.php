<?php

namespace App;

use App\Mail\ResetPassword;
use App\Mail\Welcome;
use App\Models\Grade;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class, 'teacher_id');
    }

    public function scopeTeacher($query)
    {
        return $query->where('type', 'teacher');
    }

    public function sendPasswordResetNotification($token)
    {
        Mail::to($this)->send(new ResetPassword($this, $token));

//        $this->notify(new ResetPasswordNotification($token));
    }
}
