<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
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
