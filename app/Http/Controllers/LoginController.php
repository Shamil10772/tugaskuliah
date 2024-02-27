<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
{
    if (auth()->check()) {
        return redirect()->route('home');
    }

    return view('auth.login');

}
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors(['email' => 'Email atau password tidak valid.'])->withInput($request->only('email'));
}
}
