<?php

namespace App\Http\Controllers;

use App\Models\KKM;
use Illuminate\Http\Request;

class KKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data KKM, beserta relasi ke kuis (jika ada)
        $kkmList = KKM::with('kuis')->get();
        $title = "Atur KKM";
        return view('dashboard-guru.kkm', compact('kkmList', 'title')); // Menyertakan data ke dalam view
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
    public function show(KKM $kkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KKM $kkm)
    {
        $kkm = KKM::findOrFail($kkm->id);
        $title = "Edit KKM";
        return view('dashboard-guru.editKKM', compact('kkm', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KKM $kkm)
    {
        $request->validate([
            'nilai_kkm' => 'required|integer|min:0|max:100',
        ]);

        $kkm->nilai_kkm = $request->nilai_kkm;
        $kkm->save();

        return redirect()->route('dashboard-guru.kkm')->with('success', 'KKM berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KKM $kkm)
    {
        //
    }
}
