<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Genre;

class Restaurant extends Model
{
    use HasFactory;

    public function user( ){
        return $this->belongsTo(User::class);
    }

    public function listComments( ){
        return $this->hasMany(ListComment::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'bucket_genre', 'bucket_id', 'genre_id');
    }
}
