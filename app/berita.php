<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';

    protected $fillable=[
        'id_berita',
        'judul',
        'foto1',
        'foto2',
        'foto3',
        'berita',
        'penulis',
        'tanggal'
    ];

    protected $primaryKey = 'id_berita';
}
