<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_soals_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kuis_id')->constrained('kuis')->onDelete('cascade'); // Relasi dengan tabel kuis
            $table->text('soal');
            $table->json('options');
            $table->integer('jawaban_benar'); // Indeks jawaban benar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soals');
    }
}

