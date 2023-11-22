<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;


    public function restaurants()
{
    return $this->belongsToMany(Restaurant::class, 'genre_restaurant');
}
    

    protected $table = 'genres';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function social_posts()
    {
        return $this->belongsToMany(SocialPost::class, 'genre_social_post');
    }

}
