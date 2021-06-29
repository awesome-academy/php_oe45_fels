<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        "name",
    ];
    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'topic_id', 'id');
    }
}
