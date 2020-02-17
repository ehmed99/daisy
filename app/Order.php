<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Eloquent
{
    //
    use SoftDeletes;
    protected $fillable = [
        'client_id', 'product_id','user_id','paid_amount', 'total_bill', 'quantity', 'discount_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function emp()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function discount()
    {
        return $this->belongsTo(discountVoucher::class, 'discount_id');
    }
}
