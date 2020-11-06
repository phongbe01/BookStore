<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];
    protected $table = 'ordersdetail';

    public function orderDetails()
    {
        return $this->belongsTo('App\OrderDetail');
    }

}
