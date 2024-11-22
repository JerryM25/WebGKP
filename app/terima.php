<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terima extends Model
{
    protected $table = 'terima';

    protected $fillable =[
        'id_pembelian',
        'id_req_beli',
        'tanggal',
        'quantity',
        'status'
    ];
}
