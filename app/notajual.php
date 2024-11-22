<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notajual extends Model
{
    protected $table = 'notajual';

    protected $fillable =[
        'id_nota_jual',
        'id_customer',
        'tanggal'
    ];
}
