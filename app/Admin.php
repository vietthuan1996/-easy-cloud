<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
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
