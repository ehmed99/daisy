<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'size','deleted_at','img','price'
    ];
}
