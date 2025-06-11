<?php

namespace App\Http\Controllers;

use App\Models\Materi2;
use Illuminate\Http\Request;

class Materi2Controller extends Controller
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
        $validPages = ['penglihatan-manusia', 'penglihatan-serangga', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404);
        }

        // 🔒 Cek akses progres siswa
        $akses = app(\App\Http\Controllers\SiswaController::class)->cekProgress();

        // Sesuaikan key akses dengan nama route/halaman
        $mapHalamanToKey = [
            'penglihatan-manusia' => 'materi2.penglihatan-manusia',
            'penglihatan-serangga' => 'materi2.penglihatan-serangga',
            'kuis' => 'kuis.2'
        ];

        $kunciAkses = $mapHalamanToKey[$halaman] ?? null;
        if ($kunciAkses && !($akses[$kunciAkses] ?? false)) {
            return redirect('/dashboard-siswa')->with('error', 'Akses ditolak. Selesaikan materi sebelumnya terlebih dahulu.');
        }

        $titles = [
            'penglihatan-manusia' => 'Indra Penglihatan Manusia',
            'penglihatan-serangga' => 'Indra Penglihatan Serangga',
            'kuis' => 'Kuis 2'
        ];

        return view('materi2.' . $halaman, [
            'title' => $titles[$halaman] ?? 'Materi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi2 $materi2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi2 $materi2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi2 $materi2)
    {
        //
    }
}
