<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noterima extends Model
{
    protected $table = 'noterima';

    protected $primaryKey = 'id_no_terima';

    protected $fillable =[
        'id_terima',
        'tanggal',
        'no_terima'
    ];
}
