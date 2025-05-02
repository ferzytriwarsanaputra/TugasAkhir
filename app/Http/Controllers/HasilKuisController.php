<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\HasilKuis;

class HasilKuisController extends Controller
{
    public function simpanHasil(Request $request)
    {
        $user = auth()->user();
        $hariIni = Carbon::now()->translatedFormat('l');
        $tanggal = Carbon::now()->format('Y-m-d');
        $waktu = Carbon::now()->format('H:i:s');
    
        HasilKuis::create([
            'user_id' => $user->id,
            'kuis_id' => $request->kuis_id,
            'skor' => $request->skor,
            'hari' => $hariIni,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
        ]);
    
        return redirect()->route('kuis.nilai')->with([
            'skor' => $request->skor,
            'nama' => $user->nama
        ]);
    }
    
    public function hasilKuis()
    {
        $hasilKuis = HasilKuis::with('siswa')->get();
        $title = 'Hasil Kuis';
        return view('dashboard-guru.hasil-kuis', compact('hasilKuis', 'title'));
    }
}
