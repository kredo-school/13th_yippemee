<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BucketGenre extends Model
{
    use HasFactory;

    protected $table = 'bucket_genre';
    protected $fillable = ['bucket_id', 'genre_id'];

    # To get the name of the genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function bucket()
{
    return $this->belongsTo(Bucket::class, 'bucket_id');
}
}
