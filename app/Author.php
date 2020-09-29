<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];
    protected $table = 'authors';
    protected $fillable = [
        'id', 'authorname'
    ];

    public function books()
    {
        return $this->hasMany('App\Books', 'authorID', 'id');
    }
}
