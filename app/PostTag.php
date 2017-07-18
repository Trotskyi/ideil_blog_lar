<?php

namespace Ideal;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $fillable = [
        'id',
        'post_id',
        'tag_id',
    ];

    protected $table = 'post_tag';

    public function posts()
    {
        return $this->hasMany('Ideal\PostTag');
    }
}
