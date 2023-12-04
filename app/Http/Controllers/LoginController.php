<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function otentikasi(Request $req)
    {
        $tiket = $req->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($tiket)) {
            $req->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('pesan', 'Gagal Login ! username atau password tidak sama')
                ->with('warna','light');
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
