<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'name',
        'alias',
        'content',
        'link',
        'type_show'
    ];
    protected $table = 'solution';

    function solutionCategory() {
        return $this->belongsTo('App\SolutionCategory');
    }
}
