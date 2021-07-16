<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillabel = [
        'name',
        'subject',
        'message',
    ];
    use HasFactory;
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function Category()
    {
        return $this-BelongsTo('App\Category');
    }
}
