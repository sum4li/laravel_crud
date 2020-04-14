<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduks';
    protected $fillable= ['nama','tempat_lahir','tanggal_lahir','alamat','jenis_kelamin','nik'];
}
