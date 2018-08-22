<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'content',
        'describe',
        'link',
        'type_show'
    ];
    protected $table = 'service';

    function serviceCategory() {
        return $this->belongsTo('App\ServiceCategory');
    }
}
