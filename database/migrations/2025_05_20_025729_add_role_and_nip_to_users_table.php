<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('siswa'); // 'siswa' atau 'guru'
            $table->string('nip')->nullable()->unique(); // hanya untuk guru

            // Ubah kolom siswa jadi nullable agar bisa dipakai guru juga
            $table->string('nisn')->nullable()->change();
            $table->string('kelas')->nullable()->change();
            $table->string('sekolah')->nullable()->change();
        });
    }

    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'nip']);
            // Kalau mau rollback kolom siswa jadi wajib lagi, bisa tambahkan:
            // $table->string('nisn')->nullable(false)->change();
            // $table->string('kelas')->nullable(false)->change();
            // $table->string('sekolah')->nullable(false)->change();
        });
    }
};
