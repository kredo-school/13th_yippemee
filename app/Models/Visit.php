<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "image",
        "restaurantName",
        "star_rating",
        "date",
        "url",
        "description",
    ];

    # A visit belongs to a user
    # To get the owner of the visit
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
