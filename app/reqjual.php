<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reqjual extends Model
{
    protected $table = 'notajual';

    protected $primaryKey = 'id_req_beli';

    protected $fillable =[
        'id_req_jual',
        'id_nota_jual',
        'id_barang',
        'quantity',
        'harga_jual',
        'total'
    ];
}
