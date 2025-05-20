<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Ferzy',
            'nisn' => '0032258121',
            'kelas' => '8A',
            'sekolah' => 'SMP Negeri 25',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        User::create([
            'nama' => 'Putra',
            'nip' => '1987654321',
            'password' => Hash::make('guruPass'),
            'role' => 'guru',
        ]);
    }
}