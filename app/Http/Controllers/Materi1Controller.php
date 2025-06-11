<?php

namespace App\Http\Controllers;

use App\Models\Materi1;
use Illuminate\Http\Request;

class Materi1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($halaman)
    {
        $validPages = ['sifat-cahaya', 'bayangan-cermin', 'lensa', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404);
        }

        // 🔒 Cek akses progres siswa
        $akses = app(\App\Http\Controllers\SiswaController::class)->cekProgress();

        // Sesuaikan key akses dengan nama route/halaman
        $mapHalamanToKey = [
            'sifat-cahaya' => 'materi1.sifat-cahaya',
            'bayangan-cermin' => 'materi1.bayangan-cermin',
            'lensa' => 'materi1.lensa',
            'kuis' => 'petunjuk.1'
        ];

        $kunciAkses = $mapHalamanToKey[$halaman] ?? null;
        if ($kunciAkses && !($akses[$kunciAkses] ?? false)) {
            return redirect('/dashboard-siswa')->with('error', 'Akses ditolak. Selesaikan materi sebelumnya terlebih dahulu.');
        }

        $titles = [
            'sifat-cahaya' => 'Sifat-sifat Cahaya',
            'bayangan-cermin' => 'Pembentukan Bayangan pada Cermin',
            'lensa' => 'Lensa',
            'kuis' => 'Kuis 1'
        ];

        return view('materi1.' . $halaman, [
            'title' => $titles[$halaman] ?? 'Materi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
