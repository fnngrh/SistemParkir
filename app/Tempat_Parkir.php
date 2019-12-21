<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tempat_Parkir extends Model
{
    protected $table ='tempat_parkir';

    protected $primarykey = 'id_parkir';
    protected $fillable = [
            'id_kendaraan',
            'waktu_masuk',
            'waktu_keluar'
    ];

    public $timestamps = false;
}
