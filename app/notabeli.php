<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notabeli extends Model
{
    protected $table = 'notabeli';

    protected $fillable =[
        'id_nota_beli',
        'id_vendor',
        'tanggal'
    ];
}
