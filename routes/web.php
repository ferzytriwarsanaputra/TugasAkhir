<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\Materi1Controller;
use App\Http\Controllers\Materi2Controller;
use App\Http\Controllers\Materi3Controller;
use App\Http\Controllers\AkunSiswaController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\KKMController;
use App\Http\Controllers\HasilKuisController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SiswaController;
use App\Models\Kuis;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('beranda', ["title" => "Beranda"]);
})->name('beranda');

Route::get('/materi', function () {
    return view('materi', ["title" => "Materi"]);
});

Route::get('/tentang', function () {
    return view('tentang', ["title" => "Tentang"]);
});

// Login Siswa
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Login Guru + halaman yang dilindungi
Route::group(['middleware' => ['auth', 'guru']], function () {
    // Halaman utama guru
    Route::get('/dashboard-guru', [DashboardGuruController::class, 'index'])->name('dashboard-guru.index');
    Route::get('/data-pengguna',[DashboardController::class,'showDataPengguna'])->name('dashboard-guru.showDataPengguna');
    
    // Sub-menu halaman guru
    Route::get('/dashboard-guru/akunSiswa', [AkunSiswaController::class, 'show'])->name('dashboard-guru.akunSiswa');
    Route::post('/dashboard-guru/akunSiswa', [AkunSiswaController::class, 'store'])->name('dashboard-guru.akunSiswa.store');

    Route::get('/dashboard-guru/akunSiswa/{id}/edit', [AkunSiswaController::class, 'edit'])->name('dashboard-guru.siswa.edit');
    Route::put('/dashboard-guru/akunSiswa/{id}', [AkunSiswaController::class, 'update'])->name('dashboard-guru.siswa.update');
    Route::delete('/dashboard-guru/akunSiswa/{id}', [AkunSiswaController::class, 'destroy'])->name('dashboard-guru.siswa.destroy');
    
    Route::get('/dashboard-guru/hasil-belajar', function () {
        return view('dashboard-guru.hasil-belajar', ["title" => "Hasil Belajar"]);
    })->name('dashboard-guru.hasil-belajar');

    Route::get('/dashboard-guru/progres', function () {
        return view('dashboard-guru.progres', ["title" => "Progres Belajar Siswa"]);
    })->name('dashboard-guru.progres');

    Route::get('/dashboard-guru/kkm', function () {
        return view('dashboard-guru.kkm', ["title" => "Atur KKM"]);
    })->name('dashboard-guru.kkm');

    Route::get('/dashboard-guru/hasil-kuis', function () {
        return view('dashboard-guru.hasil-kuis', ["title" => "Hasil Kuis"]);
    })->name('dashboard-guru.hasil-kuis');

    Route::get('/dashboard-guru/tambahSiswa', function () {
        return view('dashboard-guru.tambahSiswa', ["title" => "Tambah Siswa"]);
    })->name('dashboard-guru.tambahSiswa');

    Route::get('/dashboard-guru/progres', [DashboardGuruController::class, 'progresBelajar'])->name('dashboard-guru.progres');

    // Route untuk menampilkan KKM
    Route::get('/dashboard-guru/kkm', [KKMController::class, 'index'])->name('dashboard-guru.kkm');

    // Route untuk halaman form edit KKM
    Route::get('/dashboard-guru/kkm/{kkm}/edit', [KKMController::class, 'edit'])->name('dashboard-guru.kkm.edit');

    // Route untuk update KKM
    Route::put('/dashboard-guru/kkm/{kkm}', [KKMController::class, 'update'])->name('dashboard-guru.kkm.update');

    Route::get('/dashboard-guru/hasil-kuis', [HasilKuisController::class, 'hasilKuis'])->name('dashboard-guru.hasil-kuis');
});

Route::middleware('auth')->group(function () {

    // Materi
    Route::get('/materi1/{halaman}', [Materi1Controller::class, 'show']);
    Route::get('/materi2/{halaman}', [Materi2Controller::class, 'show']);
    Route::get('/materi3/{halaman}', [Materi3Controller::class, 'show']);

    Route::get('/dashboard-siswa', function () {
        $kuisList = Kuis::all();
        $title = 'Dashboard Siswa';
        return view('dashboard-siswa.index', compact('kuisList', 'title'));
    })->name('dashboard-siswa');

    Route::get('/dashboard-siswa/evaluasi', function () {
        $title = 'Evaluasi';
        return view('dashboard-siswa.evaluasi.index', compact('title'));
    });

    Route::get('/petunjuk/{kuis}', function ($id) {
        $kuis = Kuis::with('soals')->findOrFail($id);
        $title = 'Petunjuk Kuis';
        return view('dashboard-siswa.petunjuk', compact('kuis', 'title'));
    })->name('petunjuk');

    Route::get('/petunjuk-evaluasi/{id}', function ($id) {
        $evaluasi = Kuis::with('soals')->findOrFail($id);
        $title = 'Petunjuk Evaluasi';
        return view('dashboard-siswa.evaluasi.petunjuk', compact('evaluasi', 'title'));
    })->name('petunjuk-evaluasi');

    Route::get('/evaluasi/mulai/{id}', [KuisController::class, 'evaluasi'])->name('mulai-evaluasi');

    Route::post('/dashboard-siswa/submit-kuis', [KuisController::class, 'submitKuis'])->name('evaluasi.submit');

    Route::get('/dashboard-siswa/nilai', [KuisController::class, 'nilai'])->name('dashboard-siswa.nilai');

    Route::get('/kuis/{kuis}', function ($id) {
        $kuis = Kuis::with('soals')->findOrFail($id);
        $title = 'Kuis';
        return view('dashboard-siswa.kuis', compact('kuis', 'title'));
    })->name('mulai-kuis');

    Route::post('/hasil', function (Request $request) {
        return redirect()->route('dashboard-siswa.hasil');
    })->name('hasil-kuis');

    Route::post('/siswa/submit-kuis', [KuisController::class, 'submitKuis'])->name('siswa.submitKuis');

    Route::get('/siswa/nilai/{id}', [KuisController::class, 'tampilkanNilai'])->name('siswa.nilai');

    Route::post('/simpan-hasil-latihan', [LatihanController::class, 'simpanHasil']);
    Route::get('/dashboard-siswa', [SiswaController::class, 'index'])->middleware('auth');
    Route::get('/hasilSiswa', [SiswaController::class, 'hasilSiswa'])->middleware('auth');
});