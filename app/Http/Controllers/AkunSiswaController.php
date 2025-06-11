<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AkunSiswaController extends Controller
{
    public function show()
    {
        $users = User::where('role', 'siswa')->get();

        $users->map(function ($user) {
            $latihanDone = \App\Models\HasilLatihan::where('siswa_id', $user->id)->count();
            $kuisDone = \App\Models\HasilKuis::where('user_id', $user->id)
                ->whereIn('kuis_id', [1, 2, 3])
                ->distinct('kuis_id')
                ->count('kuis_id');
            $evaluasiDone = \App\Models\HasilKuis::where('user_id', $user->id)
                ->where('kuis_id', 4)
                ->exists();

            $user->selesai = $latihanDone >= 9 && $kuisDone === 3 && $evaluasiDone;
            return $user;
        });

        return view('dashboard-guru.akunSiswa', [
            'title' => 'Akun Siswa',
            'users' => $users
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'namaInput' => 'required',
            'nisnInput' => 'required',
            'kelasInput' => 'required',
            'sekolahInput' => 'required',
            'passwordInput' => 'required|min:8|confirmed',
        ]);

        User::create([
            'nama' => $request->namaInput,
            'nisn' => $request->nisnInput,
            'kelas' => $request->kelasInput,
            'sekolah' => $request->sekolahInput,
            'password' => Hash::make($request->passwordInput),
        ]);

        return redirect()->route('dashboard-guru.akunSiswa')->with('success', 'Akun siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard-guru.editSiswa', [
            'title' => 'Edit Akun Siswa',
            'siswa' => $user // Ubah jadi 'siswa' supaya cocok dengan blade kamu
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'namaInput' => 'required',
            'nisnInput' => 'required',
            'kelasInput' => 'required',
            'sekolahInput' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->nama = $request->namaInput;
        $user->nisn = $request->nisnInput;
        $user->kelas = $request->kelasInput;
        $user->sekolah = $request->sekolahInput;

        if ($request->filled('passwordInput')) {
            $request->validate([
                'passwordInput' => 'min:8|confirmed',
            ]);
            $user->password = Hash::make($request->passwordInput);
        }

        $user->save();

        return redirect()->route('dashboard-guru.akunSiswa')->with('success', 'Akun siswa berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard-guru.akunSiswa')->with('success', 'Akun siswa berhasil dihapus!');
    }
}