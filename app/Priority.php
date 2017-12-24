<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table = 'priorities';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}
