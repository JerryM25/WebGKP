<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    protected $table = 'keluar';

    protected $primaryKey = 'id_keluar';

    protected $foreignKey = [
        'id_no_keluar',
        'id_req_jual'
    ];

    protected $fillable =[
        'id_keluar',
        'id_no_keluar',
        'id_req_jual',
        'quantity'
    ];
}
