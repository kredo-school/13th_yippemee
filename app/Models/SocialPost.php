<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SocialPost extends Model
{
    use HasFactory;

    #SocialPost belongs to u user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
