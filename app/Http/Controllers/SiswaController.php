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
            'title' => 'Dashboard Siswa',
            'aksesMateri' => $this->cekProgress()
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

    public function cekProgress()
    {
        $user = auth()->user();
        $siswaId = $user->id;

        // Buat fungsi bantuan kecil di dalam method
        $sudahSelesai = function ($materiKey) use ($siswaId) {
            return DB::table('hasil_latihan')
                    ->where('siswa_id', $siswaId)
                    ->where('latihan_ke', $this->materiKeyToLatihanKe($materiKey))
                    ->exists();
        };

        $sudahSelesaiKuis = function ($kuisKe) use ($siswaId) {
            return DB::table('hasil_kuis')
                    ->where('user_id', $siswaId)
                    ->where('kuis_id', $kuisKe)
                    ->exists();
        };

        return [
            'materi1.sifat-cahaya' => true,
            'materi1.bayangan-cermin' => $sudahSelesai('materi1.sifat-cahaya'),
            'materi1.lensa' => $sudahSelesai('materi1.bayangan-cermin'),
            'kuis.1' => $sudahSelesai('materi1.lensa'),
            'materi2.penglihatan-manusia' => $sudahSelesaiKuis(1),
            'materi2.penglihatan-serangga' => $sudahSelesai('materi2.penglihatan-manusia'),
            'kuis.2' => $sudahSelesai('materi2.penglihatan-serangga'),
            'materi3.kamera' => $sudahSelesaiKuis(2),
            'materi3.lup' => $sudahSelesai('materi3.kamera'),
            'materi3.mikroskop' => $sudahSelesai('materi3.lup'),
            'materi3.teleskop' => $sudahSelesai('materi3.mikroskop'),
            'kuis.3' => $sudahSelesai('materi3.teleskop'),
            'evaluasi' => $sudahSelesaiKuis(3),
        ];
    }

    private function materiKeyToLatihanKe($key)
    {
        $map = [
            'materi1.sifat-cahaya' => 1,
            'materi1.bayangan-cermin' => 2,
            'materi1.lensa' => 3,
            'materi2.penglihatan-manusia' => 4,
            'materi2.penglihatan-serangga' => 5,
            'materi3.kamera' => 6,
            'materi3.lup' => 7,
            'materi3.mikroskop' => 8,
            'materi3.teleskop' => 9,
        ];

        return $map[$key] ?? null;
    }
}
