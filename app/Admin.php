<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'username', 'email', 'password', 'oauth_token' , 'access_token'
    ];

    
    protected $hidden = [
        'password', 
    ];

   
}
