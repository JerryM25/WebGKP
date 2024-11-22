<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';

    protected $fillable =[
        'id_customer',
        'nama_customer',
        'nomor_customer',
        'alamat_customer'
    ];
}
