<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\KKM;
use App\Models\Kuis;
use App\Models\HasilKuis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class KuisController extends Controller
{
    public function submitKuis(Request $request)
    {
        $validated = $request->validate([
            'kuis_id' => 'required|integer|exists:kuis,id',
            'skor' => 'required|integer|min:0',
            'waktu' => 'required|string', // Format HH:MM:SS
        ]);

        try {
            $userId = auth()->id();
            $kuisId = $validated['kuis_id'];
            $skorBaru = $validated['skor'];
            $waktuPengerjaan = $validated['waktu'];

            Carbon::setLocale('id');
            $now = Carbon::now();

            $hasilKuis = HasilKuis::where('user_id', $userId)
                ->where('kuis_id', $kuisId)
                ->first();

            $nilaiDisimpan = false;

            if ($hasilKuis) {
                if ($skorBaru > $hasilKuis->skor) {
                    $hasilKuis->update([
                        'skor' => $skorBaru,
                        'tanggal' => $now->format('Y-m-d'),
                        'hari' => $now->translatedFormat('l'),
                        'waktu' => $waktuPengerjaan,
                    ]);
                    $nilaiDisimpan = true;
                }
            } else {
                HasilKuis::create([
                    'kuis_id' => $kuisId,
                    'user_id' => $userId,
                    'skor' => $skorBaru,
                    'tanggal' => $now->format('Y-m-d'),
                    'hari' => $now->translatedFormat('l'),
                    'waktu' => $waktuPengerjaan,
                ]);
                $nilaiDisimpan = true;
            }

            // Redirect dan bawa skor dan status simpan
            return redirect()->route('dashboard-siswa.nilai', [
                'kuis_id' => $kuisId,
                'skor_override' => $nilaiDisimpan ? null : $skorBaru,
                'waktu_override' => $nilaiDisimpan ? null : $waktuPengerjaan,
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal menyimpan hasil kuis: ' . $e->getMessage()], 500);
        }
    }

    public function nilai(Request $request)
    {
        $kuisId = $request->query('kuis_id');
        $userId = auth()->id();

        $hasil = HasilKuis::where('user_id', $userId)
            ->where('kuis_id', $kuisId)
            ->first();

        if (!$hasil) {
            return redirect('/')->with('error', 'Hasil kuis tidak ditemukan.');
        }

        $nama = auth()->user()->nama;

        // Ambil skor override jika tersedia
        $skor = $request->query('skor_override') ?? $hasil->skor;
        $waktu = $request->query('waktu_override') ?? $hasil->waktu;
        $hari = Carbon::parse($hasil->tanggal)->translatedFormat('l');
        $tanggal = Carbon::parse($hasil->tanggal)->translatedFormat('d F Y');

        // Ambil KKM dari database
        $kkm = KKM::where('kuis_id', $kuisId)->value('nilai_kkm');

        // Bandingkan skor dengan nilai KKM
        $status = $kkm !== null && $skor >= $kkm ? 'memenuhi' : 'belum memenuhi';

        $title = 'Hasil Nilai';

        return view('dashboard-siswa.nilai', compact(
            'skor', 'nama', 'hari', 'tanggal', 'waktu',
            'kuisId', 'kkm', 'status', 'title'
        ));
    }

    public function petunjuk($id)
    {
        $userId = auth()->id();

        // Cek apakah skor sudah 100, jika ya langsung redirect ke nilai
        $hasil = HasilKuis::where('user_id', $userId)->where('kuis_id', $id)->first();
        if ($hasil && $hasil->skor == 100) {
            return redirect()->route('dashboard-siswa.nilai', ['kuis_id' => $id]);
        }        

        // Cek syarat latihan
        $latihanSelesai = DB::table('hasil_latihan')
            ->where('siswa_id', $userId)
            ->pluck('latihan_ke')
            ->toArray();

        $syarat = [
            1 => ['latihan_ke' => 3, 'aktivitas' => 'Aktivitas 1.3'],
            2 => ['latihan_ke' => 6, 'aktivitas' => 'Aktivitas 2.2'],
            3 => ['latihan_ke' => 9, 'aktivitas' => 'Aktivitas 3.4'],
        ];

        $rule = $syarat[$id] ?? null;

        if ($rule && !in_array($rule['latihan_ke'], $latihanSelesai)) {
            abort(403, "Selesaikan terlebih dahulu {$rule['aktivitas']} sebelum mengakses Petunjuk Kuis $id.");
        }

        $kuis = Kuis::with('soals')->findOrFail($id);
        $title = 'Petunjuk Kuis';
        return view('dashboard-siswa.petunjuk', compact('kuis', 'title'));
    }

    public function kuis($id)
    {
        $userId = auth()->id();

        // Jika sudah skor 100, langsung redirect ke halaman nilai
        $hasil = HasilKuis::where('user_id', $userId)->where('kuis_id', $id)->first();
        if ($hasil && $hasil->skor == 100) {
            return redirect()->route('dashboard-siswa.nilai', ['kuis_id' => $id]);
        }        

        // Cek syarat latihan
        $latihanSelesai = DB::table('hasil_latihan')
            ->where('siswa_id', $userId)
            ->pluck('latihan_ke')
            ->toArray();

        $syarat = [
            1 => ['latihan_ke' => 3, 'aktivitas' => 'Aktivitas 1.3'],
            2 => ['latihan_ke' => 6, 'aktivitas' => 'Aktivitas 2.2'],
            3 => ['latihan_ke' => 9, 'aktivitas' => 'Aktivitas 3.4'],
        ];

        $rule = $syarat[$id] ?? null;

        if ($rule && !in_array($rule['latihan_ke'], $latihanSelesai)) {
            abort(403, "Selesaikan terlebih dahulu {$rule['aktivitas']} sebelum mengerjakan Kuis $id.");
        }

        $kuis = Kuis::with('soals')->findOrFail($id);
        $title = 'Kuis';
        return view('dashboard-siswa.kuis', compact('kuis', 'title'));
    }

    public function petunjukEvaluasi($id)
    {
        $userId = auth()->id();

        $kuis3 = HasilKuis::where('user_id', $userId)->where('kuis_id', 3)->first();
        if (!$kuis3) {
            abort(403, 'Selesaikan Kuis 3 terlebih dahulu sebelum mengakses Petunjuk Evaluasi.');
        }

        $evaluasi = Kuis::with('soals')->findOrFail($id);
        $title = 'Petunjuk Evaluasi';
        return view('dashboard-siswa.evaluasi.petunjuk', compact('evaluasi', 'title'));
    }

    public function evaluasi($id)
    {
        $userId = auth()->id();

        $kuis3 = HasilKuis::where('user_id', $userId)->where('kuis_id', 3)->first();
        if (!$kuis3) {
            abort(403, 'Selesaikan Kuis 3 terlebih dahulu sebelum mengakses Evaluasi.');
        }

        $kuis = Kuis::findOrFail($id);
        $title = 'Evaluasi';
        return view('dashboard-siswa.evaluasi.index', compact('kuis', 'title'));
    }
}