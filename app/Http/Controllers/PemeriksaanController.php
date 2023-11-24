<?php

namespace App\Http\Controllers;

use App\Pemeriksaan;
use App\Pasien;
use App\Dokter;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        $pemeriksaans = Pemeriksaan::with("pasien", "dokter")->get();
        return view("pemeriksaan.index", ['pemeriksaans'=> $pemeriksaans]);
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view("pemeriksaan.create", ["pasiens"=> $pasiens , "dokters"=> $dokters]);
    }


    public function store(Request $request)
    {
        $pemeriksaan = new Pemeriksaan;
        $pemeriksaan->gejala = $request->gejala;
        $pemeriksaan->diagnosis = $request->diagnosis;
        $pemeriksaan->obat = $request->obat;
        $pemeriksaan->keterangan = $request->keterangan;
        $pemeriksaan->id_pasien_pemeriksaan = $request->id_pasien_pemeriksaan;
        $pemeriksaan->id_dokter_pemeriksaan = $request->id_dokter_pemeriksaan;
        $pemeriksaan->save();

        return redirect()->route('pemeriksaan.index')->with('success','Data Pemeriksaan Berhasil Ditambahkan. ');
    }


    public function show($id)
    {
        $pemeriksaan = Pemeriksaan::find($id);
        return view('pemeriksaan.show', compact('pemeriksaan'));
    }


    public function edit($id)
    {
        $pemeriksaan = Pemeriksaan::with('pasien', 'dokter')->find($id);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('pemeriksaan.edit', ['pemeriksaan' => $pemeriksaan, 'pasiens' => $pasiens, 'dokters' => $dokters]);
    }


    public function update(Request $request, $id)
    {
        $pemeriksaan = Pemeriksaan::find($id);
        $pemeriksaan->gejala = $request->gejala;
        $pemeriksaan->diagnosis = $request->diagnosis;
        $pemeriksaan->obat = $request->obat;
        $pemeriksaan->keterangan = $request->keterangan;
        $pemeriksaan->id_pasien_pemeriksaan = $request->id_pasien_pemeriksaan;
        $pemeriksaan->id_dokter_pemeriksaan = $request->id_dokter_pemeriksaan;
        $pemeriksaan->save();

        return redirect()->route('pemeriksaan.index')->with('success','Data Pemeriksaan Berhasil Di Perbaharui.');
    }


    public function destroy($id)
    {
        Pemeriksaan::find($id)->delete();
        return redirect()->route('pemeriksaan.index')->with('success','Data Pemeriksaan Berhasil Di Hapus.');
    }
}
