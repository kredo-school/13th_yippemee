<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bucket extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "image",
        "restaurantName",
        "genre",
        "hoursOption",
        "url",
        "description",
    ];

    # A bucket belongs to a user
    # To get the owner of the bucket
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    # TO get the genres under a bucketList
    public function bucketGenre()
    {
        return $this->hasMany(BucketGenre::class);
    }
}
