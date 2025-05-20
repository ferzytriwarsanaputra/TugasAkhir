<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\HasilKuis;
use App\Models\KKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class KuisController extends Controller
{
    public function submitKuis(Request $request)
    {
        $validated = $request->validate([
            'kuis_id' => 'required|integer|exists:kuis,id',
            'skor' => 'required|integer|min:0',
            'waktu' => 'required|string', // Waktu pengerjaan dalam format HH:MM:SS
        ]);

        try {
            $userId = auth()->user()->id;
            $kuisId = $validated['kuis_id'];
            $waktuPengerjaan = $validated['waktu']; // Ambil waktu pengerjaan dalam format HH:MM:SS

            // Atur locale ke Bahasa Indonesia
            Carbon::setLocale('id');
            $now = Carbon::now();

            $hasilKuis = HasilKuis::where('user_id', $userId)
                                ->where('kuis_id', $kuisId)
                                ->first();

            if ($hasilKuis) {
                // Update
                $hasilKuis->skor = $validated['skor'];
                $hasilKuis->tanggal = Carbon::now()->format('Y-m-d');
                $hasilKuis->hari = Carbon::now()->translatedFormat('l');
                $hasilKuis->waktu = $now->format('H:i:s');  // Waktu penyelesaian
                $hasilKuis->waktu = $waktuPengerjaan; // Waktu pengerjaan dalam format HH:MM:SS
                $hasilKuis->save();
            } else {
                // Buat baru
                $hasilKuis = new HasilKuis();
                $hasilKuis->kuis_id = $kuisId;
                $hasilKuis->user_id = $userId;
                $hasilKuis->skor = $validated['skor'];
                $hasilKuis->tanggal = Carbon::now()->format('Y-m-d');
                $hasilKuis->hari = Carbon::now()->translatedFormat('l');
                $hasilKuis->waktu = $now->format('H:i:s');
                $hasilKuis->waktu = $waktuPengerjaan; // Waktu pengerjaan dalam format HH:MM:SS
                $hasilKuis->save();
            }

            // Simpan data ke session agar bisa ditampilkan di halaman nilai
            Session::put('nama', auth()->user()->nama);
            Session::put('skor', $validated['skor']);
            Session::put('hari', $now->translatedFormat('l'));
            Session::put('tanggal', $now->translatedFormat('d F Y'));
            Session::put('waktu', $waktuPengerjaan); // Waktu pengerjaan
            Session::put('kuis_id', $kuisId);  // Pastikan kuis_id disimpan di session

            return redirect()->route('dashboard-siswa.nilai');

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal menyimpan hasil kuis: ' . $e->getMessage()], 500);
        }
    }

    // Method untuk menampilkan halaman nilai
    public function nilai()
    {
        $userId = auth()->user()->id;

        // Ambil hasil kuis terakhir dari user
        $hasil = HasilKuis::where('user_id', $userId)
                        ->orderBy('created_at', 'desc')
                        ->first();

        if (!$hasil) {
            return redirect('/')->with('error', 'Hasil kuis tidak ditemukan.');
        }

        // Data dari session
        $nama = session('nama');
        $skor = session('skor');
        $hari = session('hari');
        $tanggal = session('tanggal');
        $waktu = session('waktu');
        $kuisId = session('kuis_id');

        // Ambil nilai KKM berdasarkan kuis_id
        $kkm = KKM::where('kuis_id', $kuisId)->value('nilai_kkm');

        // Tentukan status kelulusan
        $status = $skor >= $kkm ? 'memenuhi' : 'belum memenuhi';

        return view('dashboard-siswa.nilai', [
            'skor' => $skor,
            'nama' => $nama,
            'hari' => $hari,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kuis_id' => $kuisId,
            'kkm' => $kkm,
            'status' => $status, // Tambahkan status ke view
        ]);
    }

    public function evaluasi($id)
    {
        $kuis = Kuis::findOrFail($id);
        return view('dashboard-siswa.evaluasi.index', compact('kuis'));
    }
}