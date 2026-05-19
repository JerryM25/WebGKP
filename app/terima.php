<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terima extends Model
{
    protected $table = 'terima';

    protected $primaryKey = 'id_terima';

    protected $fillable =[
        'id_terima',
        'id_no_terima',
        'id_req_beli',
        'quantity'
    ];
}
