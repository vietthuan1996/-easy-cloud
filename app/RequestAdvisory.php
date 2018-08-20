<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestAdvisory extends Model
{
    protected $fillable = [
        'name',
        'email',
        'content'
    ];
    protected $table = 'request_advisory';
}
