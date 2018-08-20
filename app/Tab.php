<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = [
        'id_cate',
        'type_post',
        'slug',
        'name',
        'content'
    ];
    protected $table = 'tab';

    function serviceCategory() {
        return $this->belongsTo('App\ServiceCategory');
    }

    function solutionCategory() {
        return $this->belongsTo('App\SolutionCategory');
    }
}
