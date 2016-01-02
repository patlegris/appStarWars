<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
//    Pour pouvoir créer en masse dans tinker
    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}