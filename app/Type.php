<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}