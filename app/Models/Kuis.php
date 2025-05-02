<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    // Definisikan relasi satu-ke-banyak dengan model Soal
    public function soals()
    {
        return $this->hasMany(Soal::class);
    }
}