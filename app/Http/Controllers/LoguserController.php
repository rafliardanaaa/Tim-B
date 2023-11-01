<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoguserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function authanticate(Request $request){
        $credentials=$request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'login gagal!');
    }

    public function logout(){
        Auth::logout();

    // Redirect ke halaman logout atau halaman lain yang Anda inginkan.
    return redirect('loguser')->with('succes', 'berhasil keluar');
    }
}
