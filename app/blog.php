<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title', 'description', 'content','author', 'img',
    ];
}
