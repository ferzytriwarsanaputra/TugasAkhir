<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function show()
    {
        return view('login-siswa.index', [
            "title" => "Hasil Belajar"
        ]);
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->checkRemember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'nisn' => 'Tidak ada akun yang cocok dengan inputan anda'
        ])->onlyInput('nisn');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('beranda');
    }

}