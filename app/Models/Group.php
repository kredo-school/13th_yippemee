<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'restaurant_id',
        'member_id',
        'image'
    ];

    public function preference()
    {
        return $this->hasMany(Preference::class);
    }
}
