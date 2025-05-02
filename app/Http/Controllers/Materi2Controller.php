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
        // Pastikan halaman ada untuk menghindari error
        $validPages = ['penglihatan-manusia', 'penglihatan-serangga', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404); // Jika halaman tidak valid, tampilkan error 404
        }

        return view('materi2.' . $halaman);
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
