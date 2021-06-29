<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        "name",
        "described",
        "topic_id",
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function scopeofTopicId($query, $id)
    {
        return $query->where('topic_id', $id);
    }
}
