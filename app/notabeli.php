<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notabeli extends Model
{
    protected $table = 'notabeli';

    protected $primaryKey = 'id_nota_beli';

    protected $foreignKey = 'id_vendor';

    protected $fillable =[
        'id_nota_beli',
        'id_vendor',
        'no_notabeli',
        'tanggal',
        'status'
    ];
}
