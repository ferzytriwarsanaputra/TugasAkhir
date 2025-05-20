<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilLatihan extends Model
{
    protected $table = 'hasil_latihan'; // pastikan nama tabel benar

    protected $fillable = [
        'siswa_id',
        'latihan_ke',
        'tanggal_selesai'
    ];

    public $timestamps = false; // jika tabel kamu tidak ada kolom created_at dan updated_at
}