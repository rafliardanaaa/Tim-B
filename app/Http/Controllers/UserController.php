<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pegawai;

class UserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        $users = User::with('pegawai')->get();
        return view('data.user.index', ['users' => $users]);
    }

    // Menampilkan formulir tambah user
    public function create()
    {
        $pegawais = Pegawai::all();
        return view('data.user.create', ['pegawais' => $pegawais]);
    }

    // Menyimpan user baru
    public function store(Request $request)
    {

        $user = new User;
        $user->user_name = $request->user_name;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->aktif = $request->aktif;
        $user->id_pegawai_user = $request->id_pegawai_user;
        $user->save();

        return redirect()->route('user.index');
    }

    // Menampilkan formulir edit user
    public function edit($id)
    {
        $user = User::with('pegawai')->find($id);
        $pegawais = Pegawai::all();
        return view('data.user.edit', ['user' => $user, 'pegawais' => $pegawais]);
    }

    // Mengupdate user
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->user_name = $request->user_name;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->aktif = $request->aktif;
        $user->id_pegawai_user = $request->id_pegawai_user;
        $user->save();

        return redirect()->route('user.index');
    }

    // Menghapus user
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index');
    }
}
