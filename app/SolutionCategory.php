<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolutionCategory extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'describe'
    ];
    protected $table = 'solution_category';

    function solution() {
        return $this->hasMany('App\Solution');
    }
}
