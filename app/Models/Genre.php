<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function social_posts()
    {
        return $this->belongsToMany(SocialPost::class, 'genre_social_post');
    }
}
