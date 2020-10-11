<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $table = 'orders';

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
