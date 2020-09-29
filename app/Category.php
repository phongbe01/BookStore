<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';
    protected $fillable = [
        'id', 'categoryname',
    ];

    public function books()
    {
        return $this->hasMany('App\Books', 'categoryID', 'id');
    }
}
