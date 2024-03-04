<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Proses autentikasi login di sini

        // Jika autentikasi berhasil, arahkan ke halaman home
        return view('home');
    }
}
