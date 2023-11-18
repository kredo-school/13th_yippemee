<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'date',
        's_time',
        'e_time',
        'restaurant_id',
        'description',
    ];

    public function planGenre()
    {
        return $this->hasMany(PlanGenre::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
