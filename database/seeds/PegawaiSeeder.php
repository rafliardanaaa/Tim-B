<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = new Pegawai;
        $pegawai->nama_pegawai = 'Andi Supriadi';
        $pegawai->jabatan = 'Pegawai kontrak';
        $pegawai->jenis_kelamin = 'Laki-laki'; // Ganti dengan jenis kelamin yang sesuai
        $pegawai->tempat_lahir = 'Bogor';
        $pegawai->tanggal_lahir = '1990-01-01'; // Tanggal lahir
        $pegawai->telepon = '08123456789'; // Nomor telepon
        $pegawai->alamat = 'jl. Matahari no. 3 kecamatan Gunung Putri';
        $pegawai->save();
    }
}
