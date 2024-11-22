<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $table = 'vendor';

    protected $fillable =[
        'id_vendor',
        'nama_vendor',
        'nomor_vendor',
        'alamat_vendor'
    ];
}
