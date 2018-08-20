<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'id_cate',
        'name',
        'alias',
        'content'
    ];
    protected $table = 'solution';

    function solutionCategory() {
        return $this->belongsTo('App\SolutionCategory');
    }
}
