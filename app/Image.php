<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'location',
        'is_show',
    ];
    protected $table = 'image';
}
