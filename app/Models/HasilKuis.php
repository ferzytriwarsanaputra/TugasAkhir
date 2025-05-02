<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilKuis extends Model
{
    protected $table = 'hasil_kuis'; // Nama tabel

    protected $fillable = [
        'user_id',
        'kuis_id',
        'skor',
        'hari',
        'tanggal',
        'waktu',
    ];

    // Relasi ke user (siswa)
    public function siswa()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke kuis
    public function kuis()
    {
        return $this->belongsTo(Kuis::class);
    }
}
