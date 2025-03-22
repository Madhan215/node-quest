<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'title' => 'JavaScript Runtime Node.js',
                'url' => '/pengenalan/javascript-runtime-nodejs',
                'step' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pemrograman Sisi Klien dan Sisi Server',
                'url' => '/pengenalan/pemrograman-sisi-klien-dan-sisi-server',
                'step' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Persiapan Belajar Node.js',
                'url' => '/pengenalan/persiapan-belajar-nodejs',
                'step' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pemrograman Sinkronus dan Asinkronus',
                'url' => '/pengenalan/pemrograman-sinkronus-dan-asinkronus',
                'step' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hubungan Node.js dengan Browser',
                'url' => '/pengenalan/hubungan-nodejs-dengan-browser',
                'step' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Engine V8',
                'url' => '/pengenalan/engine-v8',
                'step' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Installasi Node.js',
                'url' => '/pengenalan/installasi-nodejs',
                'step' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'REPL (Read - Evaluate - Print - Loop)',
                'url' => '/pengenalan/repl-read-evaluate-print-loop',
                'step' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Membuat Projek Node.js',
                'url' => '/pengenalan/membuat-projek-nodejs',
                'step' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 1',
                'url' => '/pengenalan/kuis',
                'step' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pengertian Modul pada Node.js',
                'url' => '/modul/pengertian-modul-pada-nodejs',
                'step' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fungsi Require()',
                'url' => '/modul/fungsi-require',
                'step' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Core Moduls',
                'url' => '/modul/core-moduls',
                'step' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Local Moduls',
                'url' => '/modul/local-moduls',
                'step' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 2',
                'url' => '/modul/kuis',
                'step' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'NPM',
                'url' => '/npm/npm',
                'step' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mengelola Projek dengan NPM',
                'url' => '/npm/mengelola-projek-dengan-npm',
                'step' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mempublikasikan Paket ke NPM',
                'url' => '/npm/mempublikasikan-paket-ke-npm',
                'step' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 3',
                'url' => '/npm/kuis',
                'step' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Modul Event',
                'url' => '/modul-event/modul-event',
                'step' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fungsi dan Manfaat Modul Event',
                'url' => '/modul-event/fungsi-dan-manfaat-modul-event',
                'step' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Kode Modul Event',
                'url' => '/modul-event/contoh-kode-modul-event',
                'step' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 4',
                'url' => '/modul-event/kuis',
                'step' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Module File System',
                'url' => '/modul-file-system/modul-file-system',
                'step' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fungsi dan Operasi Dasar Modul File System',
                'url' => '/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system',
                'step' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Kode Modul Event',
                'url' => '/modul-file-system/contoh-kode-modul-file-system',
                'step' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 5',
                'url' => '/modul-file-system/kuis',
                'step' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Modul HTTP',
                'url' => '/modul-http/modul-http',
                'step' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fungsi Utama Modul HTTP',
                'url' => '/modul-http/fungsi-utama-modul-http',
                'step' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Kode Penggunaan Modul HTTP',
                'url' => '/modul-http/contoh-kode-penggunaan-modul-http',
                'step' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kuis 6',
                'url' => '/modul-http/kuis',
                'step' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Evaluasi',
                'url' => '/evaluasi',
                'step' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
