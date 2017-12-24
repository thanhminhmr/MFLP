<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relater extends Model
{
    protected $table = 'relaters';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}
