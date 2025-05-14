<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kuis;
use App\Models\Soal;
use Illuminate\Support\Facades\DB;

class KuisSeeder extends Seeder
{
    public function run()
    {

        // Matikan sementara foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel yang saling berhubungan
        DB::table('soals')->truncate();
        DB::table('hasil_kuis')->truncate();
        DB::table('kuis')->truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // KUIS 1
        $kuis1 = Kuis::firstOrCreate(
            ['judul' => 'Sifat Cahaya dan Proses Pembentukan Bayangan'],
            ['durasi' => 600]
        );

        if ($kuis1->soals()->count() === 0) {
            $soalKuis1 = [
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
                        'c.	Nyata, terbalik, dan diperkecil',
                        'd. Maya, terbalik, dan sama besar dengan benda'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Sebuah benda diletakkan di depan cermin cembung. Sifat bayangan yang terbentuk adalah...',
                    'options' => json_encode([
                        'a.	Nyata, terbalik, diperbesar',
                        'b. Maya, tegak, diperkecil',
                        'c. Nyata, tegak, diperkecil',
                        'd. Maya, terbalik, diperbesar'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Jika dua buah cermin datar disusun membentuk sudut 60°, jumlah bayangan yang terbentuk adalah...',
                    'options' => json_encode([
                        'a.	5',
                        'b. 6',
                        'c. 7',
                        'd. 8'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Berikut ini adalah contoh penerapan cermin cekung dalam kehidupan sehari-hari, kecuali...',
                    'options' => json_encode([
                        'a.	Cermin rias',
                        'b.	Reflektor lampu sorot',
                        'c.	spion kendaraan',
                        'd.	Cermin di teleskop'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Lensa cembung memiliki sifat sebagai berikut, kecuali...',
                    'options' => json_encode([
                        'a.	Menyebabkan cahaya berkumpul di satu titik fokus',
                        'b.	Dapat digunakan sebagai kacamata untuk penderita rabun jauh',
                        'c.	Bayangan yang terbentuk selalu maya dan tegak',
                        'd.	Digunakan dalam kamera dan mikroskop'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Jika sebuah benda diletakkan pada jarak yang lebih jauh dari titik fokus pada lensa cekung, maka bayangan yang terbentuk adalah...',
                    'options' => json_encode([
                        'a.	Nyata, terbalik, diperbesar',
                        'b.	Maya, tegak, diperkecil',
                        'c.	Nyata, tegak, sama besar',
                        'd.	Maya, terbalik, diperbesar'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Fungsi utama lensa cekung dalam kacamata adalah...',
                    'options' => json_encode([
                        'a.	Membantu penderita rabun dekat',
                        'b.	Memfokuskan cahaya pada retina',
                        'c.	Menyebarkan cahaya agar bayangan jatuh lebih jauh',
                        'd.	Mengumpulkan cahaya agar lebih terang'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Seorang siswa melihat melalui lensa cembung. Jika ia meletakkan objek di antara fokus (F) dan lensa, maka bayangan yang terlihat akan...',
                    'options' => json_encode([
                        'a.	Nyata, tegak, diperbesar',
                        'b.	Maya, tegak, diperbesar',
                        'c.	Nyata, terbalik, diperbesar',
                        'd.	Maya, terbalik, diperkecil'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Lensa manakah yang digunakan pada kaca pembesar (lup)?',
                    'options' => json_encode([
                        'a.	Lensa cekung',
                        'b.	Lensa cembung',
                        'c.	Cermin cekung',
                        'd.	Cermin cembung'
                    ]),
                    'jawaban_benar' => 1
                ],
            ];
            foreach ($soalKuis1 as $data) {
                $kuis1->soals()->create($data);
            }
        }

        // KUIS 2
        $kuis2 = Kuis::firstOrCreate(
            ['judul' => 'Indra Penglihatan Manusia dan Hewan'],
            ['durasi' => 600]
        );

        if ($kuis2->soals()->count() === 0) {
            $soalKuis2 = [
                [
                    'soal' => 'Bagian mata yang berfungsi untuk mengatur jumlah cahaya yang masuk ke mata adalah…',
                    'options' => json_encode([
                        'a. Kornea',
                        'b. Retina',
                        'c. Iris',
                        'd. Lensa'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Bayangan yang ditangkap oleh retina berbentuk…',
                    'options' => json_encode([
                        'a. Sejati dan tegak',
                        'b. Sejati dan terbalik',
                        'c.	Maya dan tegak',
                        'd. Maya dan terbalik'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Seseorang yang mengalami kesulitan melihat benda jauh mengalami kelainan yang disebut…',
                    'options' => json_encode([
                        'a.	Miopi',
                        'b. Hipermetropi',
                        'c. Astigmatisma',
                        'd. Presbiopi'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Bagian mata yang berfungsi sebagai tempat jatuhnya bayangan dan memiliki sel batang serta sel kerucut adalah…',
                    'options' => json_encode([
                        'a.	Lensa',
                        'b. Pupil',
                        'c. Retina',
                        'd. Kornea'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Sel kerucut dalam retina berfungsi untuk…',
                    'options' => json_encode([
                        'a.	Melihat dalam kondisi gelap',
                        'b.	Membantu mata dalam menyesuaikan fokus',
                        'c.	Membedakan warna',
                        'd.	Menjaga bentuk bola mata'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Mata majemuk pada serangga tersusun dari unit-unit kecil yang disebut…',
                    'options' => json_encode([
                        'a.	Rodopsin',
                        'b.	Ommatidium',
                        'c.	Retina',
                        'd.	Sklera'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Keunggulan mata majemuk dibandingkan mata manusia adalah…',
                    'options' => json_encode([
                        'a.	Mampu menangkap gerakan dengan sangat cepat',
                        'b.	Memiliki resolusi lebih tinggi',
                        'c.	Dapat melihat dalam gelap total',
                        'd.	Bisa menyesuaikan fokus seperti lensa mata manusia'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Lebah memiliki kemampuan khusus dalam penglihatannya, yaitu…',
                    'options' => json_encode([
                        'a.	Melihat dengan resolusi tinggi',
                        'b.	Melihat cahaya ultraviolet',
                        'c.	Melihat dalam kondisi gelap',
                        'd.	Melihat warna seperti manusia'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Mengapa lalat sulit ditangkap dengan tangan manusia?',
                    'options' => json_encode([
                        'a.	Karena mereka memiliki penglihatan yang lebih tajam',
                        'b.	Karena mereka dapat melihat dalam gelap',
                        'c.	Karena mata majemuk mereka mendeteksi gerakan sangat cepat',
                        'd.	Karena mereka memiliki lebih banyak sel kerucut dibandingkan manusia'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Apa kelemahan utama mata majemuk serangga dibandingkan mata manusia?',
                    'options' => json_encode([
                        'a.	Tidak dapat menangkap gerakan',
                        'b.	Resolusi penglihatannya lebih rendah',
                        'c.	Tidak dapat melihat warna',
                        'd.	Tidak dapat melihat ke berbagai arah'
                    ]),
                    'jawaban_benar' => 1
                ],
            ];
            foreach ($soalKuis2 as $data) {
                $kuis2->soals()->create($data);
            }
        }

        // KUIS 3
        $kuis3 = Kuis::firstOrCreate(
            ['judul' => 'Alat Optik dalam Kehidupan Sehari-hari'],
            ['durasi' => 600]
        );

        if ($kuis3->soals()->count() === 0) {
            $soalKuis3 = [
                [
                    'soal' => 'Kamera bekerja dengan prinsip dasar yang mirip dengan mata manusia. Bagian kamera yang berfungsi seperti retina pada mata manusia adalah…',
                    'options' => json_encode([
                        'a. Lensa',
                        'b. Diafragma',
                        'c. Sensor atau film',
                        'd. Viewfinder'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Bagaimana cara kerja kaca pembesar (lup) dalam memperbesar objek?',
                    'options' => json_encode([
                        'a. Menggunakan lensa cekung untuk membalik bayangan',
                        'b. Menggunakan lensa cembung untuk membentuk bayangan nyata dan terbalik',
                        'c. Menggunakan lensa cembung untuk memperbesar bayangan maya dan tegak',
                        'd. Menggunakan dua lensa untuk memperbesar bayangan secara bertahap'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Bagian utama pada mikroskop yang pertama kali memperbesar objek adalah…',
                    'options' => json_encode([
                        'a. Lensa objektif',
                        'b. Lensa okuler',
                        'c. Diafragma',
                        'd. Cermin pemantul'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Perbedaan utama antara teleskop bias dan teleskop pantul adalah…',
                    'options' => json_encode([
                        'a. Teleskop bias menggunakan cermin, sedangkan teleskop pantul menggunakan lensa',
                        'b. Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin',
                        'c. Teleskop bias digunakan untuk melihat benda kecil, sedangkan teleskop pantul untuk benda besar',
                        'd. Teleskop bias membiaskan cahaya, sedangkan teleskop pantul memantulkan cahaya'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Saat menggunakan kamera, cahaya masuk melalui lensa dan difokuskan ke sensor. Bagian yang mengatur jumlah cahaya yang masuk ke sensor disebut…',
                    'options' => json_encode([
                        'a. Lensa',
                        'b. Sensor',
                        'c. Diafragma',
                        'd. Cermin'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Mengapa teleskop pantul lebih banyak digunakan oleh para astronom dibandingkan teleskop bias?',
                    'options' => json_encode([
                        'a. Teleskop pantul lebih ringan dan lebih mudah dibuat daripada teleskop bias',
                        'b. Teleskop pantul lebih murah dibandingkan teleskop bias',
                        'c. Teleskop pantul menghasilkan bayangan yang lebih kecil',
                        'd. Teleskop pantul dapat menggunakan cermin yang lebih besar untuk menangkap lebih banyak cahaya'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Saat menggunakan mikroskop, objek yang diamati diletakkan di atas…',
                    'options' => json_encode([
                        'a. Lensa objektif',
                        'b. Lensa okuler',
                        'c. Meja objek',
                        'd. Cermin pantul'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Kamera digital saat ini lebih banyak digunakan daripada kamera analog karena…',
                    'options' => json_encode([
                        'a. Tidak memerlukan lensa untuk memfokuskan cahaya',
                        'b. Menggunakan sensor digital yang lebih praktis dibandingkan film',
                        'c. Tidak memerlukan sumber cahaya untuk mengambil gambar',
                        'd. Hasil gambar dapat langsung dilihat dan diedit dengan mudah'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Apa fungsi lensa okuler pada mikroskop?',
                    'options' => json_encode([
                        'a. Memfokuskan cahaya ke objek',
                        'b. Memperbesar bayangan dari lensa objektif',
                        'c. Mengatur jumlah cahaya yang masuk',
                        'd. Menyimpan objek yang diamati'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Mengapa objek yang diletakkan di bawah mikroskop tampak terbalik dan diperbesar?',
                    'options' => json_encode([
                        'a. Karena cahaya dibiaskan oleh cermin',
                        'b. Karena lensa okuler membalik dan memperbesar objek',
                        'c. Karena kombinasi lensa objektif dan okuler membentuk bayangan terbalik dan diperbesar',
                        'd. Karena meja objek membalik gambar'
                    ]),
                    'jawaban_benar' => 2
                ],
            ];
            foreach ($soalKuis3 as $data) {
                $kuis3->soals()->create($data);
            }
        }

        // KUIS EVALUASI
        $kuisEvaluasi = Kuis::firstOrCreate(
            ['judul' => 'Evaluasi Akhir'],
            ['durasi' => 900] // misalnya durasi lebih lama
        );

        if ($kuisEvaluasi->soals()->count() === 0) {
            $soalEvaluasi = [
                [
                    'soal' => 'Seorang siswa menyalakan senter dalam ruangan gelap dan melihat cahaya membentuk garis lurus. Fenomena ini membuktikan bahwa cahaya…',
                    'options' => json_encode([
                        'a. Dapat merambat ke segala arah',
                        'b. Tidak dapat merambat di ruang hampa',
                        'c. Dapat dibiaskan oleh udara',
                        'd. Memiliki sifat merambat lurus'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Jika sebuah benda diletakkan di depan cermin datar, maka bayangan yang terbentuk memiliki sifat…',
                    'options' => json_encode([
                        'a. Tegak dan sama besar',
                        'b. Terbalik dan diperkecil',
                        'c. Terbalik dan diperbesar',
                        'd. Tidak dapat diamati'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Seorang ilmuwan melakukan eksperimen menggunakan prisma kaca dan melihat bahwa cahaya putih terurai menjadi berbagai warna. Hal ini membuktikan bahwa cahaya memiliki sifat…',
                    'options' => json_encode([
                        'a. Memantul sempurna',
                        'b. Merambat lurus',
                        'c. Dapat mengalami pembiasan',
                        'd. Tidak dapat dibelokkan'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Dalam kondisi gelap total, seseorang tidak dapat melihat benda di sekelilingnya. Hal ini menunjukkan bahwa…',
                    'options' => json_encode([
                        'a. Mata manusia hanya bekerja pada siang hari',
                        'b. Cahaya diperlukan untuk melihat benda',
                        'c. Semua benda memancarkan cahaya sendiri',
                        'd. Cahaya tidak bisa merambat di udara'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Mengapa air di kolam terlihat lebih dangkal daripada kedalaman aslinya?',
                    'options' => json_encode([
                        'a. Karena cahaya dipantulkan oleh air',
                        'b. Karena cahaya dibiaskan saat memasuki air',
                        'c. Karena air menyerap cahaya sepenuhnya',
                        'd. Karena cahaya tidak dapat menembus air'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Seorang siswa berdiri di depan cermin cekung. Jika ia berdiri lebih dekat daripada titik fokus cermin, bayangan yang terbentuk adalah…',
                    'options' => json_encode([
                        'a. Nyata, terbalik, dan lebih kecil',
                        'b. Maya, tegak, dan diperkecil',
                        'c. Nyata, tegak, dan diperbesar',
                        'd. Maya, tegak, dan diperbesar'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Dalam kehidupan sehari-hari, cermin cembung sering digunakan sebagai kaca spion kendaraan karena…',
                    'options' => json_encode([
                        'a. Dapat memperkecil bayangan dan mencakup bidang pandang lebih luas',
                        'b. Dapat memperbesar bayangan',
                        'c. Membentuk bayangan nyata',
                        'd. Dapat mengubah warna cahaya'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Mengapa cermin datar menghasilkan bayangan yang tampak sejajar dengan benda aslinya?',
                    'options' => json_encode([
                        'a. Karena cahaya tidak mengalami perubahan arah',
                        'b. Karena cahaya dibiaskan ke mata pengamat',
                        'c. Karena cahaya dipantulkan secara teratur',
                        'd. Karena cermin menyerap semua cahaya'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Jika seberkas cahaya sejajar jatuh pada lensa cembung, maka cahaya tersebut akan…',
                    'options' => json_encode([
                        'a. Menyebar ke segala arah',
                        'b. Diteruskan tanpa perubahan',
                        'c. Berkumpul di satu titik fokus',
                        'd. Dipantulkan kembali'
                    ]),
                    'jawaban_benar' => 2
                ],
                [
                    'soal' => 'Seorang anak menggunakan kacamata berlensa cekung untuk membaca buku. Hal ini menunjukkan bahwa anak tersebut mengalami…',
                    'options' => json_encode([
                        'a. Rabun dekat (hipermetropi)',
                        'b. Rabun jauh (miopi)',
                        'c. Astigmatisme',
                        'd. Presbiopi'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Lensa yang digunakan dalam kaca pembesar adalah…',
                    'options' => json_encode([
                        'a. Lensa cekung',
                        'b. Lensa cembung',
                        'c. Lensa silinder',
                        'd. Lensa prisma'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Bagaimana mata manusia dapat melihat suatu benda?',
                    'options' => json_encode([
                        'a. Mata mengeluarkan cahaya ke benda',
                        'b. Cahaya dari benda masuk ke mata dan difokuskan oleh lensa',
                        'c. Cahaya dari mata dipantulkan oleh benda',
                        'd. Mata manusia tidak memerlukan cahaya untuk melihat'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Perbedaan utama antara mata manusia dan mata serangga adalah…',
                    'options' => json_encode([
                        'a. Mata serangga memiliki lensa tunggal seperti manusia',
                        'b. Mata manusia tidak dapat menangkap warna, sedangkan serangga bisa',
                        'c. Mata manusia lebih sensitif terhadap gerakan dibandingkan mata serangga',
                        'd. Mata serangga tersusun dari ribuan ommatidium yang memberikan penglihatan majemuk'
                    ]),
                    'jawaban_benar' => 3
                ],
                [
                    'soal' => 'Serangga seperti lebah dapat melihat warna ultraviolet yang tidak bisa dilihat oleh manusia. Hal ini disebabkan oleh…',
                    'options' => json_encode([
                        'a. Struktur retina yang berbeda',
                        'b. Lensa mata yang lebih kuat',
                        'c. Kemampuan refleksi cahaya lebih tinggi',
                        'd. Posisi mata yang lebih besar'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Kamera memiliki cara kerja yang mirip dengan mata manusia karena…',
                    'options' => json_encode([
                        'a. Menggunakan lensa untuk memfokuskan cahaya',
                        'b. Menggunakan cermin untuk membentuk bayangan',
                        'c. Tidak memerlukan cahaya untuk menangkap gambar',
                        'd. Menggunakan sensor seperti retina manusia'
                    ]),
                    'jawaban_benar' => 0
                ],
                [
                    'soal' => 'Kaca pembesar bekerja dengan prinsip…',
                    'options' => json_encode([
                        'a. Memantulkan cahaya',
                        'b. Membiaskan cahaya melalui lensa cembung',
                        'c. Menyerap cahaya agar objek lebih jelas',
                        'd. Memisahkan cahaya menjadi warna berbeda'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Mikroskop bekerja dengan cara…',
                    'options' => json_encode([
                        'a. Memantulkan cahaya melalui cermin',
                        'b. Menggunakan dua lensa cembung untuk memperbesar bayangan',
                        'c. Menyerap cahaya untuk memperjelas gambar',
                        'd. Membiaskan cahaya agar gambar tampak kecil'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Teleskop reflektor menggunakan cermin cekung karena…',
                    'options' => json_encode([
                        'a. Dapat membiaskan cahaya lebih kuat',
                        'b. Dapat memfokuskan cahaya ke satu titik',
                        'c. Memantulkan cahaya tanpa perubahan arah',
                        'd. Meningkatkan warna objek yang diamati'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Mengapa teleskop lebih efektif dalam melihat benda jauh dibandingkan mata manusia?',
                    'options' => json_encode([
                        'a. Memiliki sensor elektronik yang lebih canggih',
                        'b. Menggunakan lensa dan cermin besar untuk mengumpulkan lebih banyak cahaya',
                        'c. Menggunakan teknologi digital untuk memproses gambar',
                        'd. Memanfaatkan medan magnet untuk memperbesar gambar'
                    ]),
                    'jawaban_benar' => 1
                ],
                [
                    'soal' => 'Dalam penerapan sehari-hari, prinsip kerja teleskop digunakan dalam…',
                    'options' => json_encode([
                        'a. Kamera ponsel',
                        'b. Periskop kapal selam',
                        'c. Teropong bintang',
                        'd. Mikroskop laboratorium'
                    ]),
                    'jawaban_benar' => 2
                ],
            ];

            foreach ($soalEvaluasi as $data) {
                $kuisEvaluasi->soals()->create($data);
            }
        }
    }
}
