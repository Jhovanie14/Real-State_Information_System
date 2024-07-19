<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'uuid',
        // 'account_id',
        'email',
        'password',
        'last_name',
        'first_name',
        'middle_name',
        'ext_name',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'address',
        'mobile',
        'image',
        // 'position_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'active'
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
}
