<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'company_name',
        'address',
        'hotline',
        'email',
        'website',
        'describe',
    ];
    protected $table = 'information';
}
