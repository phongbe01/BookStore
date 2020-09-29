<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $guarded = [];
    protected $table = 'publishers';
    protected $fillable = [
        'id', 'publishname', ' image',
    ];

    public function books()
    {
        return $this->hasMany('App\Books', 'publisherID', 'id');
    }
}
