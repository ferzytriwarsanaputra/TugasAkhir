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
use App\Models\Kuis;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('beranda', ["title" => "Beranda"]);
})->name('beranda');

Route::get('/materi', function () {
    return view('materi', [
        "title" => "About",
        "name" => "Ferzy Triwarsana Putra",
        "email" => "ferzy.putra@gmail.com",
        "image" => "akai.png"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', ["title" => "Tentang"]);
});

// Dashboard Siswa (tanpa login dulu)
Route::get('dashboard-siswa', function () {
    return view('dashboard-siswa.index', ["name" => "Ferzy"]);
});
Route::get('dashboard-siswa/evaluasi', function () {
    return view('dashboard-siswa.evaluasi.index');
});

// Materi
Route::get('/materi1/{halaman}', [Materi1Controller::class, 'show']);
Route::get('/materi2/{halaman}', [Materi2Controller::class, 'show']);
Route::get('/materi3/{halaman}', [Materi3Controller::class, 'show']);

// Login Siswa
Route::get('/login-siswa', [LoginController::class, 'show'])->name('login-siswa');
Route::post('/login-siswa', [LoginController::class, 'auth'])->name('login.auth');

// Login Guru + halaman yang dilindungi
Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
    
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
});

// Halaman utama dashboard siswa - dengan daftar kuis
Route::get('/dashboard-siswa', function () {
    $kuisList = Kuis::all(); // ambil semua kuis
    return view('dashboard-siswa.index', compact('kuisList'));
})->name('dashboard-siswa');

// Petunjuk kuis
Route::get('/petunjuk/{kuis}', function ($id) {
    $kuis = Kuis::with('soals')->findOrFail($id);
    return view('dashboard-siswa.petunjuk', compact('kuis'));
})->name('petunjuk');

// Halaman pengerjaan kuis
Route::get('/kuis/{kuis}', function ($id) {
    $kuis = Kuis::with('soals')->findOrFail($id);
    return view('dashboard-siswa.kuis', compact('kuis'));
})->name('mulai-kuis');

// Penyimpanan hasil kuis
Route::post('/hasil', function (Request $request) {
    // Simpan hasil kuis ke database (bisa dikembangkan sesuai kebutuhan)
    return redirect()->route('dashboard-siswa.hasil'); // Ganti dengan route tujuan
})->name('hasil-kuis');

Route::get('/dashboard-siswa/nilai', [KuisController::class, 'nilai'])->name('dashboard-siswa.nilai');

Route::post('/siswa/submit-kuis', [KuisController::class, 'submitKuis'])->name('siswa.submitKuis');

Route::get('/siswa/nilai/{id}', [KuisController::class, 'tampilkanNilai'])->name('siswa.nilai');

// Route untuk menampilkan KKM
Route::get('/dashboard-guru/kkm', [KKMController::class, 'index'])->name('dashboard-guru.kkm');

// Route untuk halaman form edit KKM
Route::get('/dashboard-guru/kkm/{kkm}/edit', [KKMController::class, 'edit'])->name('dashboard-guru.kkm.edit');

// Route untuk update KKM
Route::put('/dashboard-guru/kkm/{kkm}', [KKMController::class, 'update'])->name('dashboard-guru.kkm.update');

Route::get('/dashboard-guru/hasil-kuis', [HasilKuisController::class, 'hasilKuis'])->name('dashboard-guru.hasil-kuis');


