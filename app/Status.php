<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];
    protected $table = 'statuses';
    protected $fillable = [
        'id', 'statusname', 'color',
    ];

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
