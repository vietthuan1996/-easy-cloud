<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id_cate',
        'name',
        'alias',
        'content',
        'describe'
    ];
    protected $table = 'service';

    function serviceCategory() {
        return $this->belongsTo('App\ServiceCategory');
    }
}
