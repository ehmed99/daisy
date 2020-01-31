<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class discountVoucher extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'vourcher_name', 'product_name','deleted_at','discount'
    ];
}
