<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreProfile extends Model
{
    use HasFactory;

    protected $table = 'genre_profile';
    protected $fillable = ['genre_id', 'profile_id'];
    public $timestamps = false;

    
    # To get the nameof the genre
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
