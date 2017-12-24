<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
}
