<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('data.pegawai.index', ['pegawais' => $pegawais]);
    }

    // Menampilkan formulir tambah pegawai
    public function create()
    {
        return view('data.pegawai.create');
    }

    // Menyimpan pegawai baru
    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect()->route('pegawai.index');
    }

    // Menampilkan formulir edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('data.pegawai.edit', ['pegawai' => $pegawai]);
    }

    // Mengupdate pegawai
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect()->route('pegawai.index');
    }

    // Menghapus pegawai
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect()->route('pegawai.index');
    }
}
