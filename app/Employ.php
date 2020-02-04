<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employ extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'address','deleted_at','email'
    ];
}
