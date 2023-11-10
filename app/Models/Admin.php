<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'owner';
    protected $fillable = [
        'firstname',
        'lastname',  
        'email',
        'mobile',
        'password',
    ];
}
