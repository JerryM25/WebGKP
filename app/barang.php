<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';

    protected $fillable =[
        'id_barang',
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'kategori',
        'foto',
        'keterangan',
        'stok',
        'satuan'
    ];
}
