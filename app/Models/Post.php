<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];

    // userとのリレーション関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //commentsとのリレーション関係
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //likesとのリレーション関係
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
