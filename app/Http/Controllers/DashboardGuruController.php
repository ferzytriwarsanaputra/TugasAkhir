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
            $latihanDone = HasilLatihan::where('siswa_id', $s->id)->count();
            $totalLatihan = 9;

            $kuisDone = HasilKuis::where('user_id', $s->id)
                        ->whereIn('kuis_id', [1, 2, 3])
                        ->count();
            $totalKuis = 3;

            $evaluasiDone = HasilKuis::where('user_id', $s->id)
                        ->where('kuis_id', 4)
                        ->count();
            $totalEvaluasi = 1;

            $totalAktivitas = $totalLatihan + $totalKuis + $totalEvaluasi;
            $doneAktivitas = $latihanDone + $kuisDone + $evaluasiDone;

            $persen = ($doneAktivitas / $totalAktivitas) * 100;

            return [
                'nama' => $s->nama,
                'nisn' => $s->nisn,
                'kelas' => $s->kelas,
                'progres' => round($persen, 2)
            ];
        });

        $title = 'Progres Belajar Siswa';
        return view('dashboard-guru.progres', compact('progres', 'title'));
    }
}
