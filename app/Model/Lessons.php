<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
     protected $fillable = [
        "name",
        "described",
        "topic_id",
    ];

    public function lessons()
    {
        return $this->belongTo(Topics::class, 'topic_id', 'id');
    }
}
