<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_kuis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisTable extends Migration
{
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('durasi'); // Durasi dalam detik
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuis');
    }
}
