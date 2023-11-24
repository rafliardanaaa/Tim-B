<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';
    protected $primaryKey = 'id_dokter';
    protected $fillable = [
        'nama_dokter',
        'jenis_kelamin',
        'telepon',
        'alamat',
    ];

}
