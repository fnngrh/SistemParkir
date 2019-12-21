<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table ='kendaraan';

    protected $primarykey = 'id_kendaraan';
    protected $fillable = [
            'id_pemilik',
            'no_polisi',
            'jenis_kendaraan',
            'nama_kendaraan'
    ];

    public $timestamps = false;
}
