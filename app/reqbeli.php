<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reqbeli extends Model
{
    protected $table = 'reqbeli';

    protected $primaryKey = 'id_req_beli';

    protected $foreignKey = [
        'id_nota_beli',
        'id_barang'
    ];

    protected $fillable =[
        'id_req_beli',
        'id_nota_beli',
        'id_barang',
        'quantity',
        'harga_beli',
        'total'
    ];
}
