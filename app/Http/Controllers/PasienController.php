<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{

    public function index()
    {
        $pasiens = Pasien::all();
        return view('data.pasien.index', ['pasiens' => $pasiens]);
    }


    public function create()
    {
        return view("data.pasien.create");
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->tempat_lahir = $request->tempat_lahir;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->telepon = $request->telepon;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect()->route('pasien.index')->with("success", "Data Pasien Berhasil Ditambahkan.");
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view("data.pasien.show", compact("pasien"));
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('data.pasien.edit', ['pasien' => $pasien]);
    }

    public function update(Request $request, $id)
    {
       $pasien = Pasien::find( $id );
       $pasien->nama_pasien = $request->nama_pasien;
       $pasien->jenis_kelamin = $request->jenis_kelamin;
       $pasien->tempat_lahir = $request->tempat_lahir;
       $pasien->tanggal_lahir = $request->tanggal_lahir;
       $pasien->telepon = $request->telepon;
       $pasien->alamat = $request->alamat;
       $pasien->save();

        $pasien = Pasien::find($id);
        $pasien->update($request->all());
        return redirect()->route("pasien.index")->with("success", "Data Pasien Berhasil Di Perbaharui.");
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id)->delete();
        return redirect()->route("pasien.index")->with("success", "Data Pasien Berhasil Di Hapus.");
    }
}
