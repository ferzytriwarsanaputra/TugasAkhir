<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KkmSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data dari tabel
        DB::table('kkm')->delete();

        // Reset auto increment ID ke 1
        DB::statement('ALTER TABLE kkm AUTO_INCREMENT = 1');

        // Insert ulang data
        DB::table('kkm')->insert([
            [
                'kuis_id' => 1,
                'nilai_kkm' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kuis_id' => 2,
                'nilai_kkm' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kuis_id' => 3,
                'nilai_kkm' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
