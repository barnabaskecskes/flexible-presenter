<?php

namespace AdditionApps\FlexiblePresenter\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $dates = [
        'published_at',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
