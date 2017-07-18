<?php

namespace Ideal;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body',
    ];

    public function category()
    {
        return $this->belongsTo('Ideal\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('Ideal\Tag');
    }

    public function comments()
    {
        return $this->hasMany('Ideal\Comment');
    }
}