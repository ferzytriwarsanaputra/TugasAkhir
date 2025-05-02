<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KkmSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kkm')->insert([
            [
                'kuis_id' => 1,
                'nilai_kkm' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
