<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'akun';

    protected $fillable =[
        'id',
        'email',
        'username',
        'password'
    ];
}
