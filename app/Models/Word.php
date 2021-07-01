<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'vocabulary',
        'spelling',
        'translate',
        'category_id',
        'lession_id',
    ];
}
