<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('data.dokter.index', ['dokters' => $dokters]);
    }

    public function create()
    {
        return view('data.dokter.create');
    }

    public function store(Request $request)
    {
       $dokter = new Dokter;
       $dokter->nama_dokter = $request->nama_dokter;
       $dokter->jenis_kelamin = $request->jenis_kelamin;
       $dokter->telepon = $request->telepon;
       $dokter->alamat = $request->alamat;
       $dokter->save();

        return redirect()->route('dokter.index')->with('success', 'Data Dokter berhasil ditambahkan.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('data.dokter.edit', ['dokter' => $dokter]);
    }

    public function update(Request $request, $id)
    {
       $dokter = Dokter::find( $id );
       $dokter->nama_dokter = $request->nama_dokter;
       $dokter->jenis_kelamin = $request->jenis_kelamin;
       $dokter->telepon = $request->telepon;
       $dokter->alamat = $request->alamat;
       $dokter->save();

        $dokter = Dokter::find($id);
        $dokter->update($request->all());
        return redirect()->route('dokter.index')->with('successe', 'Data Dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id)->delete();
        return redirect()->route('dokter.index')->with('successd', 'Data Dokter berhasil dihapus.');
    }
}
