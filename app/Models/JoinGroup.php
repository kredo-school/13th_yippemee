<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinGroup extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'plan_id'];

    public $timestamps = false;

    public function user( ){
        return $this->belongsTo(User::class)->withTrashed( );
    }

    public function plans( ){
        return $this->belongsTo(Post::class);
    }
}
