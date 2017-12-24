<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}
