<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class akun extends Authenticatable
{
    protected $table = 'akun';

    protected $fillable =[
        'id',
        'email',
        'username',
        'password'
    ];
}
