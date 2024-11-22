<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    protected $table = 'keluar';

    protected $fillable =[
        'id_penjualan',
        'id_req_jual',
        'tanggal',
        'quantity',
        'status'
    ];
}
