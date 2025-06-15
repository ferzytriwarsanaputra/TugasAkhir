<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'identifier' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan nisn, nip
        $user = User::where('nisn', $credentials['identifier'])
            ->orWhere('nip', $credentials['identifier'])
            ->first();

            if ($user && Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
            
                Alert::success('Berhasil Login', 'Selamat datang, ' . $user->nama . '!');
            
                // Redirect berdasarkan role
                if ($user->role === 'guru') {
                    return redirect()->route('beranda');
                } elseif ($user->role === 'siswa') {
                    return redirect()->route('beranda');
                }            

            // Jika role tidak terdeteksi
            Auth::logout();
            return back()->withErrors([
                'identifier' => 'Role pengguna tidak valid.'
            ])->onlyInput('identifier');
        }

        return back()->withErrors([
            'identifier' => 'Login gagal, periksa kembali identifier dan password Anda.'
        ])->onlyInput('identifier');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::success('Logout Berhasil', 'Anda telah keluar dari sistem.');
        return redirect()->route('beranda');
    }
}