<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $badges = [
            // Per bab ditentukan pada saat kuis
            ['name' => 'Knowledge', 'url' => 'img/badges/1 Knowledge.png', 'info' => 'Telah menyelesaikan Bab Pengenalan', 'how' => 'Selesaikan Bab Pengenalan untuk memperoleh badge ini'],
            ['name' => 'Module', 'url' => 'img/badges/2 Module.png', 'info' => 'Telah menyelesaikan Bab Modul', 'how' => 'Selesaikan Bab Modul untuk memperoleh badge ini'],
            ['name' => 'NPM', 'url' => 'img/badges/3 NPM.png', 'info' => 'Telah menyelesaikan Bab NPM', 'how' => 'Selesaikan Bab NPM untuk memperoleh badge ini'],
            ['name' => 'Event', 'url' => 'img/badges/4 Event.png', 'info' => 'Telah memahami Modul Event', 'how' => 'Selesaikan Bab Modul Event untuk mendapatkan badge ini'],
            ['name' => 'File System', 'url' => 'img/badges/5 File System.png', 'info' => 'Telah memahami Modul File System', 'how' => 'Selesaikan Bab Modul FIle System untuk memperoleh badge ini'],
            ['name' => 'HTTP', 'url' => 'img/badges/6 HTTP.png', 'info' => 'Telah memahami Modul HTTP', 'how' => 'Selesaikan Bab Modul HTTP untuk memperoleh badge ini'],
            // 100% ini ditentukan setelah selesai mengerjakan Evaluasi
            ['name' => 'Beginner', 'url' => 'img/badges/Beginner.png', 'info' => 'Telah menyelasaikan semua pembelajaran 100%', 'how' => 'Selesaikan semua pembelajaran dengan progress 100%'],
            // The Flash dikondisikan di setiap kuis, jika selesai kurang dari 10 menit maka akan mendapatkanannya, jika di kuis selanjutnya selesai kurang dari 10 menit juga. Maka tidak akan mendapatkan badge
            ['name' => 'The Flash', 'url' => 'img/badges/The Flash.png', 'info' => 'Telah menyelasaikan kuis kurang dari 10 Menit', 'how' => 'Selesaikan kuis manapun kurang dari 10 Menit'],
            // Diperiksa pada saat evaluasi, jika poinnya memenuhi sebanyak 440 total, maka akan mendapatakan badge ini
            ['name' => 'Perfect Max Point', 'url' => 'img/badges/Perfect Max Point.png', 'info' => 'Telah mendapatkan nilai maksimal dari semua latihan', 'how' => 'Dapatkan nilai maksimal dari semua aktivitas, kuis, dan latihan'],
        ];

        foreach ($badges as $badge) {
            Badge::create($badge);
        }
    }
}
