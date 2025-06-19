<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portofolio extends Model
{
    protected $table = 'portofolio';

    protected $fillable =[
        'id_portofolio',
        'nama_porto',
        'tanggal'
    ];

    protected $primaryKey = 'id_portofolio';

}
