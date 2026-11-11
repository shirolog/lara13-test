<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['post_id', 'user_id',];

    //postとのリレーション関係
    public function post(){
        return $this->belongsTo(Post::class);
    }

    //userとのリレーション関係
    public function user(){
        return $this->belongsTo(User::class);
    }
}
