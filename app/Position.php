<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}
