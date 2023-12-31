<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'parent_id',
        'role_id',
        'school_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'address',
        'blood_group',
        'designation',
        'department',
        'password',
        'password_confirmation',
        'image',
        'gender',
    ];


    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFirstNameAttribute($value)
	{
		return $this->attributes['first_name'] = ucfirst($value);
	}

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

    public function role_id(): HasOne
    {
        return $this->hasOne(Role::class);
    }

}
