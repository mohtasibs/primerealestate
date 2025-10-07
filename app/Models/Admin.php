<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password', // hashed password will be stored
    ];

    // Hide password when converting to array/json
    protected $hidden = ['password'];
}
