<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

    public function join_groups( )
    {
        return $this->hasMany(JoinGroup::class);
    }

    public function joinedUsers( )
    {
        return $this->belongsToMany(User::class,'join_groups', 'plan_id', 'user_id');
    }

    public function isJoined( )
    {
        return $this->joinedUsers( )->where('user_id', Auth::user( )->id)->exists( );
    }
}
