<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'restaurant_id',
        'member_id',
        'image'
    ];
}
