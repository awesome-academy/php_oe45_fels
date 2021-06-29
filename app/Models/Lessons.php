<?php

namespace App\Models;

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
        return $this->belongTo('App\Models\Topics', 'topic_id', 'id');
    }
}
