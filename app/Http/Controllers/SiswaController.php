<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\HasilKuis;
use App\Models\HasilLatihan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $latihanDone = HasilLatihan::where('siswa_id', $user->id)->count();
        $kuisDone = HasilKuis::where('user_id', $user->id)
                    ->whereIn('kuis_id', [1, 2, 3])
                    ->count();
        $evaluasiDone = HasilKuis::where('user_id', $user->id)
                    ->where('kuis_id', 4)
                    ->count();

        $totalAktivitas = 9 + 3 + 1;
        $doneAktivitas = $latihanDone + $kuisDone + $evaluasiDone;
        $persen = ($doneAktivitas / $totalAktivitas) * 100;

        return view('dashboard-siswa.index', [
            'progres' => round($persen, 2),
            'title' => 'Dashboard Siswa'
        ]);
    }
    
    public function hasilSiswa()
    {
        $user = auth()->user();

        // Ambil skor terakhir per kuis
        $nilai = [
            'kuis1' => HasilKuis::where('user_id', $user->id)->where('kuis_id', 1)->latest()->value('skor') ?? 0,
            'kuis2' => HasilKuis::where('user_id', $user->id)->where('kuis_id', 2)->latest()->value('skor') ?? 0,
            'kuis3' => HasilKuis::where('user_id', $user->id)->where('kuis_id', 3)->latest()->value('skor') ?? 0,
            'evaluasi' => HasilKuis::where('user_id', $user->id)->where('kuis_id', 4)->latest()->value('skor') ?? 0
        ];

        $rataRata = collect($nilai)->avg();

        return view('dashboard-siswa.hasil', [
            'nilai' => $nilai,
            'rataRata' => round($rataRata, 2),
            'title' => 'Nilai Siswa'
        ]);
    }
}
