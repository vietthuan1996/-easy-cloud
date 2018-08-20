<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'token_register',
        'token_forgot',
        'password',
        'role'
    ];
    protected $table = 'admin';
}
