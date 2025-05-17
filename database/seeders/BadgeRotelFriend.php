<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeRotelFriend extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Badge::insert(
            [
                // Melakukan 3 kali prompt di chatbot
                ['name' => 'Rotel Friend', 'url' => 'img/badges/Rotel Friend.png', 'info' => 'Telah melakukan prompt pada ChatBot-Rotel', 'how' => 'Lakukan minimal tiga kali prompting pada ChatBot-Rotel'],
            ]
        );
    }
}
