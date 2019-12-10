<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Employ extends Eloquent
{
    //
    protected $fillable = [
        'name', 'address'
    ];
}
