<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nokeluar extends Model
{
    protected $table = 'nokeluar';

    protected $primaryKey = 'id_no_keluar';

    protected $fillable =[
        'id_keluar',
        'tanggal',
        'no_keluar'
    ];
}
