<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SocialPost extends Model
{
    use HasFactory;

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
}


