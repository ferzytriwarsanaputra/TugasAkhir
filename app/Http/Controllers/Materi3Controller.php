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
        // Pastikan halaman ada untuk menghindari error
        $validPages = ['kamera', 'lup', 'mikroskop', 'teleskop', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404); // Jika halaman tidak valid, tampilkan error 404
        }

        // Buat judul berdasarkan halaman
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
