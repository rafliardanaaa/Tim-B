<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Pasien;
use App\Dokter;

class Pemeriksaan extends Model
{
    protected $table = 'pemeriksaans';
    protected $primaryKey = 'id_pemeriksaan';
    protected $fillable = [
        'gejala',
        'diagnosis',
        'obat',
        'keterangan',
    ];
    
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien_pemeriksaan', 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter_pemeriksaan', 'id_dokter');
    }

}
