<?php

namespace App\Http\Controllers;

use App\Models\HasilLatihan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LatihanController extends Controller
{
    public function simpanHasil(Request $request)
    {
        try {
            \Log::info('Menerima request simpan hasil latihan', [
                'user' => auth()->user(),
                'latihan_ke' => $request->latihan_ke
            ]);
    
            $request->validate([
                'latihan_ke' => 'required|integer|min:1|max:9'
            ]);
    
            $user = auth()->user();
    
            if (!$user) {
                return response()->json(['status' => 'error', 'message' => 'User tidak ditemukan'], 401);
            }
    
            $existing = HasilLatihan::where('siswa_id', $user->id)
                ->where('latihan_ke', $request->latihan_ke)
                ->first();
    
            if (!$existing) {
                $hasil = HasilLatihan::create([
                    'siswa_id' => $user->id,
                    'latihan_ke' => $request->latihan_ke,
                    'tanggal_selesai' => now()
                ]);
                \Log::info('HasilLatihan dibuat:', ['hasil' => $hasil]);
            }
    
            return response()->json(['message' => 'Hasil latihan berhasil disimpan']);
        } catch (\Exception $e) {
            \Log::error('Error simpan hasil latihan: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
