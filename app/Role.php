<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    protected $table = 'roles';
    protected $fillable = [
      'rolename',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
