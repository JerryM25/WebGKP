<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notajual extends Model
{
    protected $table = 'notajual';

    protected $primaryKey = 'id_nota_jual';

    protected $foreignKey = 'id_customer';

    protected $fillable =[
        'id_nota_jual',
        'id_customer',
        'no_notajual',
        'tanggal',
        'status'
    ];
}
