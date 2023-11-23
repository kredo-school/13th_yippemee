<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'facebook_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
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
    public function myplans()
    {
        return $this->hasmany(MyPlan::class);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user');
    }






}
