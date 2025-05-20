<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hasil_latihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('users')->onDelete('cascade');
            $table->unsignedTinyInteger('latihan_ke'); // 1 - 9
            $table->timestamp('tanggal_selesai')->nullable();
            $table->timestamps();
        
            $table->unique(['siswa_id', 'latihan_ke']); // agar tidak bisa ada duplikat
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_latihan');
    }
};
