<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $dates = ['published_at'];

    protected $fillable = ['name', 'category_id', 'abstract'];

    public function picture()
    {
        return $this->hasOne('App\Picture');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y h:i:s');;
    }

    public function scopeOnline($query)
    {
        return $query->where('status', '=', 'opened');
    }
}