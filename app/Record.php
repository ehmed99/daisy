<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'client_id', 'product_id','user_id','paid_amount', 'total_bill', 'quantity'
    ];
}