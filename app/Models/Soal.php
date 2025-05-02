<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    // Definisikan relasi balik ke model Kuis
    public function kuis()
    {
        return $this->belongsTo(Kuis::class);
    }
}
