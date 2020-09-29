<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    protected $table = 'books';
    protected $fillable = [
      'id', 'title', 'summary', 'image', 'price', 'quantity', 'authorID', 'publisherID', 'categoryID',
    ];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
}
