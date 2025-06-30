<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HasilLatihan;
use App\Models\HasilKuis;

class DashboardGuruController extends Controller
{
    public function index()
    {
        $guru = auth()->user(); // Ambil data guru yang login
        $jumlahSiswa = User::where('role', 'siswa')->count();

        // Hitung siswa yang telah menyelesaikan semua (latihan + kuis + evaluasi)
        $siswa = User::where('role', 'siswa')->get();

        $jumlahSiswaSelesai = $siswa->filter(function($s) {
            $latihanDone = HasilLatihan::where('siswa_id', $s->id)->count();
            $kuisDone = HasilKuis::where('user_id', $s->id)->whereIn('kuis_id', [1,2,3])->count();
            $evaluasiDone = HasilKuis::where('user_id', $s->id)->where('kuis_id', 4)->count();

            return ($latihanDone == 9 && $kuisDone == 3 && $evaluasiDone == 1);
        })->count();

        return view('dashboard-guru.index', [
            'title' => 'Halaman Guru',
            'guru' => $guru,
            'jumlahSiswa' => $jumlahSiswa,
            'jumlahSiswaSelesai' => $jumlahSiswaSelesai
        ]);
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('data_pengguna',$data);
    }

    public function progresBelajar()
    {
        $siswa = User::where('role', 'siswa')->get();

        $progres = $siswa->map(function($s) {
            // 1. Latihan
            $latihanDone = HasilLatihan::where('siswa_id', $s->id)->count();
            $maxLatihan = 9;
            $latihanProgres = min($latihanDone, $maxLatihan);
            $latihanPersen = ($latihanProgres / $maxLatihan) * 40;
        
            // 2. Kuis & Evaluasi
            $bobotKuis = [
                1 => 20,
                2 => 20,
                3 => 20,
                4 => 40, // evaluasi
            ];
        
            $nilaiKuisPersen = 0;
            foreach ($bobotKuis as $kuisId => $bobot) {
                $hasil = HasilKuis::where('user_id', $s->id)->where('kuis_id', $kuisId)->first();
                if ($hasil) {
                    $nilaiKuisPersen += ($hasil->skor / 100) * $bobot;
                }
            }
        
            // 3. Total Progres
            $totalProgres = $latihanPersen + $nilaiKuisPersen;
            $totalProgres = min(100, round($totalProgres, 2));
        
            return [
                'nama' => $s->nama,
                'nisn' => $s->nisn,
                'kelas' => $s->kelas,
                'progres' => $totalProgres
            ];
        });        

        $title = 'Progres Belajar Siswa';
        return view('dashboard-guru.progres', compact('progres', 'title'));
    }
}
