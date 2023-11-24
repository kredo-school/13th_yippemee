<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable  = [
        'user_id',
        'date',
        's_time',
        'e_time',
        'restaurant_id',
        'description',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'plan_genre', 'plan_id', 'genre_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicComments()
    {
        return $this->hasMany(PublicComment::class)->orderBy('created_at', 'desc');
    }
}
