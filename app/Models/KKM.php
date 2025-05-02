<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKM extends Model
{
    use HasFactory;

    protected $table = 'kkm';

    // Relasi KKM dengan Kuis
    public function kuis()
    {
        return $this->belongsTo(Kuis::class);
    }
}
