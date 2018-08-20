<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'describe'
    ];
    protected $table = 'service_category';

    function service() {
        return $this->hasMany('App\Service');
    }
}
