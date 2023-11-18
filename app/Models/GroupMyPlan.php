<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMyPlan extends Model
{
    use HasFactory;

    protected $table = 'group_myplan';
    protected $fillable = ['myplan_id', 'group_id'];

    # To get the name of the genre
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function myplan()
{
    return $this->belongsTo(Myplan::class, 'myplan_id');
}
}
