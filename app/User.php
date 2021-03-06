<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $guarded = [
        'id', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;
}
