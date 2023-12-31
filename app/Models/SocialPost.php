<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class SocialPost extends Model
{
     use HasFactory, SoftDeletes;

    #SocialPost belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    # A social_post has many likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    # return true if the post is already liked
    public function isLiked()
    {
        return $this->likes()->where('user_id', Auth::user()->id)->exists();
    }

    # A social_post has many wants
    public function wants()
    {
        return $this->hasMany(Want::class);
    }

    # return true if the post is already wanted
    public function iswanted()
    {
        return $this->wants()->where('user_id', Auth::user()->id)->exists();
    }

    public function comments()
    {
        return $this->hasMany(SocialComment::class)->orderBy('created_at', 'desc');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_social_post');
    }


}


