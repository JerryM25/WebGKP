<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailbarang extends Model
{
    protected $table = 'detail_barang';

    protected $fillable =[
        'id_detail',
        'id_barang',
        'id_pembelian',
        'id_penjualan',
        'serial number'
    ];
}
