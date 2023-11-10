<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreSocialPost extends Model
{
    use HasFactory;

    protected $table = 'genre_social_post';
    protected $fillable = ['genre_id', 'social_post_id'];

    public function social_post()
    {
        return $this->belongsTo(SocialPost::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
