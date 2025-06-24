<?php

namespace App\Http\Controllers;

use App\Models\Materi3;
use Illuminate\Http\Request;

class Materi3Controller extends Controller
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
        // Daftar halaman yang valid untuk materi 3
        $validPages = ['kamera', 'lup', 'mikroskop', 'teleskop', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404);
        }

        // 🔒 Cek akses progres siswa
        $akses = app(\App\Http\Controllers\SiswaController::class)->cekProgress();

        // Mapping halaman ke key akses
        $mapHalamanToKey = [
            'kamera' => 'materi3.kamera',
            'lup' => 'materi3.lup',
            'mikroskop' => 'materi3.mikroskop',
            'teleskop' => 'materi3.teleskop',
            'kuis' => 'petunjuk.3'
        ];

        $kunciAkses = $mapHalamanToKey[$halaman] ?? null;
        if ($kunciAkses && !($akses[$kunciAkses] ?? false)) {
            return redirect('/dashboard-siswa')->with('error', 'Akses ditolak. Selesaikan materi sebelumnya terlebih dahulu.');
        }

        // Judul halaman
        $titles = [
            'kamera' => 'Kamera',
            'lup' => 'Kaca Pembesar (Lup)',
            'mikroskop' => 'Mikroskop',
            'teleskop' => 'Teleskop',
            'kuis' => 'Kuis 3'
        ];

        return view('materi3.' . $halaman, [
            'title' => $titles[$halaman] ?? 'Materi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi3 $materi3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi3 $materi3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi3 $materi3)
    {
        //
    }
}
