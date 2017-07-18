<?php

namespace Ideal;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->belongsToMany('Ideal\Post');
    }
}
