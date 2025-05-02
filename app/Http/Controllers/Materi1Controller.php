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
        // Pastikan halaman ada untuk menghindari error
        $validPages = ['sifat-cahaya', 'bayangan-cermin', 'lensa', 'kuis'];

        if (!in_array($halaman, $validPages)) {
            abort(404); // Jika halaman tidak valid, tampilkan error 404
        }

        return view('materi1.' . $halaman);
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
