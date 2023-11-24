<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoguserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function dsb(){
        return view('pegawai.dashboard');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request){
        $credentials=$request->only('email', 'password');

        if (Auth::attempt($credentials)){
        $user = Auth::user();
        $session = User::where('id_user', $user->id_pegawai_user)->first();


        if ($session){
            if ($session->level === 'admin' ){
                return redirect()->route('admin.dashboard');
            } elseif ($session->level === 'pegawai') {
                return redirect()->route('pegawai.dashboard');
            }
        }

        return back()->with('error', 'login gagal!');
    }
    }

    public function logout(){
        Auth::logout();

    // Redirect ke halaman logout atau halaman lain yang Anda inginkan.
    return redirect('/')->with('succes', 'berhasil keluar');
    }
}
