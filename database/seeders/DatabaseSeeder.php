<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kuis;
use App\Models\News;
use App\Models\User;
use App\Models\Materi;
use App\Models\Welcome;
use App\Models\Isimateris;
use App\Models\LandingImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Yudha Triya',
            'nickname' => 'Yudha',
            'email' => 'yudhatriya07@gmail.com',
            'role' => '2',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Ary Boby Siregar',
            'nickname' => 'Boby',
            'email' => 'arybobyku@gmail.com',
            'role' => '1',
            'password' => bcrypt('12345678'),
        ]);
        News::create([
            'title' => 'Sebanyak 37.871 Peserta Ikuti UTBK-SBMPTN USU',
            'slug' => 'acara-puncak-dies-natalis-ke-23-fakultas-keperawatan-usu',
            'excerpt' => 'Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Nata...',
            'isi' =>
                '<div> Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU yang merupakan acara puncak dari beberapa rangkaian kegiatan yang telah diadakan sebelumnya yaitu berupa Funwalk, Pemeriksaan Kesehatan gratis, aneka lomba dan bazaar.&nbsp;</div><div>Dies Natalis ke-23 Fakultas Keperawatan USU dihadiri oleh para undangan seperti Rektor USU, para Wakil Rektor USU, Direktur Utama RSP USU, Direktur Direktorat di lingkungan USU, Kepala Badan di lingkungan USU, para Dekan di lingkungan USU, Dinas Kesehatan Kota Medan, Dinas Kesehatan Provinsi Sumatera Utara, Institusi Pendidikan Kesehatan di kota Medan, dan undangan lainnya.&nbsp;<br>Diawali dengan Sambutan oleh Ketua Panitia Dies Natalis ke-23 Fakultas Keperawatan USU, Ikhsanuddin A. Harahap, S.Kp., MNS menyampaikan terima kasih kepada para tamu undangan yang telah hadir dalam acara puncak Dies Natalis ke-23 Fakultas Keperawatan USU dan juga kepada seluruh panitia yang terlibat pada acara ini.&nbsp;<br>&nbsp;Dilanjutkan dengan Pidato Dekan Fakultas Keperawatan USU, Dr. Dudut Tanjung, S.Kp., M.Kep., Sp.KMB menyampaikan bahwa Fakultas Keperawatan di usianya yang ke-23 mengalami perkembangan yang cukup pesat, baik dari aspek sarana, prasarana, kualitas tenaga dosen, tenaga kependidikan, serta kerjasama yang dibina baik dalam maupun luar negeri. Fakultas Keperawatan telah mendapatkan apresiasi besar oleh Rektor USU mewakili universitas bersama dengan 12 PTN se-Indonesia diajukan ke Kemendikbud Ristek RI dalam upaya Pembangunan Zona Integritas menuju Wilayah Bebas Korupsi (ZI-WBK).Rektor USU, Dr. Muryanto Amin, S.Sos., M.Si dalam sambutannya menyampaikan Selamat Ulang Tahun kepada Fakultas Keperawatan USU yang ke-23. Diibaratkan manusia, usia 23 merupakan periode awal masa dewasa seorang manusia, usia enerjik untuk melakukan hal-hal besar. Muryanto Amin juga mengingatkan bahwa dalam mengelola fakultas tidak bisa dilakukan tanpa rencana yang baik. Kegiatan apapun yang akan dilakukan tahun depan, wajib direncanakan secara matang di tahun ini agar dapat terealisasi dengan baik.Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU ditutup dengan Orasi Ilmiah oleh Ketua Umum DPP PPNI, Dr. Harif Fadhillah, S.Kp., SH., M.Kep., MH. dengan judul “Penguatan Kompetensi Perawat melalui Pendidikan Keperawatan Berorientasi Global”. Institusi pendidikan keperawatan sebagai institusi yang mempersiapkan SDM Perawat yang berkualitas secara formal tidaklah mudah dan penuh tantangan dalam penyelenggaraan pendidikan keperawatan apalagi untuk menjawab tantangan global, karenanya selain mengacu pada standar kompetensi dan kecenderungan keperawatan dunia. Pendidikan keperawatan di Indonesia juga tak lepas dari isu tantangan global yaitu Disrupsi. Disrupsi merupakan penetrasi dari Revolusi Industri 4.0 (RI 4.0) dan bahkan ada beberapa negara mengembangkan diskusinya pada RI 5.0.&nbsp;</div>',
        ]);
        News::create([
            'title' => 'Dies Natalis FKEP USU',
            'slug' => 'dies-natalis-fkep-usu',
            'excerpt' => 'Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Nata...',
            'isi' =>
                '<div> Dilansir Dari USU Rabu, 28 September 2022, Fakultas Keperawatan USU mengadakan Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU yang merupakan acara puncak dari beberapa rangkaian kegiatan yang telah diadakan sebelumnya yaitu berupa Funwalk, Pemeriksaan Kesehatan gratis, aneka lomba dan bazaar.&nbsp;</div><div>Dies Natalis ke-23 Fakultas Keperawatan USU dihadiri oleh para undangan seperti Rektor USU, para Wakil Rektor USU, Direktur Utama RSP USU, Direktur Direktorat di lingkungan USU, Kepala Badan di lingkungan USU, para Dekan di lingkungan USU, Dinas Kesehatan Kota Medan, Dinas Kesehatan Provinsi Sumatera Utara, Institusi Pendidikan Kesehatan di kota Medan, dan undangan lainnya.&nbsp;<br>Diawali dengan Sambutan oleh Ketua Panitia Dies Natalis ke-23 Fakultas Keperawatan USU, Ikhsanuddin A. Harahap, S.Kp., MNS menyampaikan terima kasih kepada para tamu undangan yang telah hadir dalam acara puncak Dies Natalis ke-23 Fakultas Keperawatan USU dan juga kepada seluruh panitia yang terlibat pada acara ini.&nbsp;<br>&nbsp;Dilanjutkan dengan Pidato Dekan Fakultas Keperawatan USU, Dr. Dudut Tanjung, S.Kp., M.Kep., Sp.KMB menyampaikan bahwa Fakultas Keperawatan di usianya yang ke-23 mengalami perkembangan yang cukup pesat, baik dari aspek sarana, prasarana, kualitas tenaga dosen, tenaga kependidikan, serta kerjasama yang dibina baik dalam maupun luar negeri. Fakultas Keperawatan telah mendapatkan apresiasi besar oleh Rektor USU mewakili universitas bersama dengan 12 PTN se-Indonesia diajukan ke Kemendikbud Ristek RI dalam upaya Pembangunan Zona Integritas menuju Wilayah Bebas Korupsi (ZI-WBK).Rektor USU, Dr. Muryanto Amin, S.Sos., M.Si dalam sambutannya menyampaikan Selamat Ulang Tahun kepada Fakultas Keperawatan USU yang ke-23. Diibaratkan manusia, usia 23 merupakan periode awal masa dewasa seorang manusia, usia enerjik untuk melakukan hal-hal besar. Muryanto Amin juga mengingatkan bahwa dalam mengelola fakultas tidak bisa dilakukan tanpa rencana yang baik. Kegiatan apapun yang akan dilakukan tahun depan, wajib direncanakan secara matang di tahun ini agar dapat terealisasi dengan baik.Peringatan Dies Natalis ke-23 Fakultas Keperawatan USU ditutup dengan Orasi Ilmiah oleh Ketua Umum DPP PPNI, Dr. Harif Fadhillah, S.Kp., SH., M.Kep., MH. dengan judul “Penguatan Kompetensi Perawat melalui Pendidikan Keperawatan Berorientasi Global”. Institusi pendidikan keperawatan sebagai institusi yang mempersiapkan SDM Perawat yang berkualitas secara formal tidaklah mudah dan penuh tantangan dalam penyelenggaraan pendidikan keperawatan apalagi untuk menjawab tantangan global, karenanya selain mengacu pada standar kompetensi dan kecenderungan keperawatan dunia. Pendidikan keperawatan di Indonesia juga tak lepas dari isu tantangan global yaitu Disrupsi. Disrupsi merupakan penetrasi dari Revolusi Industri 4.0 (RI 4.0) dan bahkan ada beberapa negara mengembangkan diskusinya pada RI 5.0.&nbsp;</div>',
        ]);

        
    }
}
