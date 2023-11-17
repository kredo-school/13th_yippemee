<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanGenre extends Model
{
    use HasFactory;
    protected $table = 'plan_genre';
    protected $fillable = ['plan_id', 'genre_id'];

    # To get the name of the genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
