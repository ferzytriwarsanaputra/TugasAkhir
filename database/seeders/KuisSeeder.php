<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kuis;
use App\Models\Soal;

class KuisSeeder extends Seeder
{
    public function run()
    {
        // Membuat Kuis
        $kuis = Kuis::create([
            'judul' => 'Kuis Fisika - Cahaya dan Alat Optik',
            'durasi' => 600, // 10 menit
        ]);

        // Data Soal
        $soalData = [
            [
                'soal' => 'Sifat bayangan yang dibentuk oleh cermin datar adalah...',
                'options' => json_encode([
                    'a. Nyata, tegak, dan lebih kecil dari benda',
                    'b. Maya, tegak, dan sama besar dengan benda',
                    'c. Nyata, terbalik, dan diperbesar',
                    'd. Maya, terbalik, dan lebih kecil dari benda'
                ]),
                'jawaban_benar' => 1
            ],
            [
                'soal' => 'Jika sebuah benda diletakkan di antara titik fokus (F) dan cermin cekung, bayangan yang terbentuk akan...',
                'options' => json_encode([
                    'a. Nyata, tegak, dan diperbesar',
                    'b. Maya, tegak, dan diperbesar',
                    'c. Nyata, terbalik, dan diperkecil',
                    'd. Maya, terbalik, dan sama besar dengan benda'
                ]),
                'jawaban_benar' => 1
            ],
            [
                'soal' => 'Sebuah benda diletakkan di depan cermin cembung. Sifat bayangan yang terbentuk adalah...',
                'options' => json_encode([
                    'a. Nyata, terbalik, diperbesar',
                    'b. Maya, tegak, diperkecil',
                    'c. Nyata, tegak, diperkecil',
                    'd. Maya, terbalik, diperbesar'
                ]),
                'jawaban_benar' => 1
            ],
            [
                'soal' => 'Jika dua buah cermin datar disusun membentuk sudut 60°, jumlah bayangan yang terbentuk adalah...',
                'options' => json_encode([
                    'a. 5',
                    'b. 6',
                    'c. 7',
                    'd. 8'
                ]),
                'jawaban_benar' => 0
            ],
            [
                'soal' => 'Berikut ini adalah contoh penerapan cermin cekung dalam kehidupan sehari-hari, kecuali...',
                'options' => json_encode([
                    'a. Cermin rias',
                    'b. Reflektor lampu sorot',
                    'c. Spion kendaraan',
                    'd. Cermin di teleskop'
                ]),
                'jawaban_benar' => 2
            ],
            [
                'soal' => 'Lensa cembung memiliki sifat sebagai berikut, kecuali...',
                'options' => json_encode([
                    'a. Menyebabkan cahaya berkumpul di satu titik fokus',
                    'b. Dapat digunakan sebagai kacamata untuk penderita rabun jauh',
                    'c. Bayangan yang terbentuk selalu maya dan tegak',
                    'd. Digunakan dalam kamera dan mikroskop'
                ]),
                'jawaban_benar' => 2
            ],
            [
                'soal' => 'Jika sebuah benda diletakkan pada jarak yang lebih jauh dari titik fokus pada lensa cekung, maka bayangan yang terbentuk adalah...',
                'options' => json_encode([
                    'a. Nyata, terbalik, diperbesar',
                    'b. Maya, tegak, diperkecil',
                    'c. Nyata, tegak, sama besar',
                    'd. Maya, terbalik, diperbesar'
                ]),
                'jawaban_benar' => 1
            ],
            [
                'soal' => 'Fungsi utama lensa cekung dalam kacamata adalah...',
                'options' => json_encode([
                    'a. Membantu penderita rabun dekat',
                    'b. Memfokuskan cahaya pada retina',
                    'c. Menyebarkan cahaya agar bayangan jatuh lebih jauh',
                    'd. Mengumpulkan cahaya agar lebih terang'
                ]),
                'jawaban_benar' => 2
            ],
            [
                'soal' => 'Seorang siswa melihat melalui lensa cembung. Jika ia meletakkan objek di antara fokus (F) dan lensa, maka bayangan yang terlihat akan...',
                'options' => json_encode([
                    'a. Nyata, tegak, diperbesar',
                    'b. Maya, tegak, diperbesar',
                    'c. Nyata, terbalik, diperbesar',
                    'd. Maya, terbalik, diperkecil'
                ]),
                'jawaban_benar' => 1
            ],
            [
                'soal' => 'Lensa manakah yang digunakan pada kaca pembesar (lup)?',
                'options' => json_encode([
                    'a. Lensa cekung',
                    'b. Lensa cembung',
                    'c. Cermin cekung',
                    'd. Cermin cembung'
                ]),
                'jawaban_benar' => 1
            ],
        ];

        // Menyimpan semua soal ke kuis
        foreach ($soalData as $data) {
            $kuis->soal()->create($data);
        }
    }
}
