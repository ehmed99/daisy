<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class discountVoucher extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'client_id', 'product_id','vourcher_name','discount'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
