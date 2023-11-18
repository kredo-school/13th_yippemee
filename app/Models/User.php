<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    # User has many social_posts
    public function social_posts()
    {
        return $this->hasMany(SocialPost::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function wants()
    {
        return $this->hasMany(Want::class);
    }

     # User has many contacts
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }


    public function visits()
    {
        return $this->hasMany(Visit::class)->latest();
    }

    public function bucket()
    {
        return $this->hasMany(Bucket::class)->latest();
    }

    public function genreProfile()
    {
        return $this->hasMany(GenreProfile::class);
    }

    public function plan()
    {
        return $this->hasMany(Plan::class);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }





}
