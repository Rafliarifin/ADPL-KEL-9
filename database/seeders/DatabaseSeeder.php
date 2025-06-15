<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Perintah ini berarti: "Tolong jalankan isi dari file AdminSeeder.php"
        $this->call([
            AdminSeeder::class,
        ]);

        // Jika nanti ada seeder lain, Anda bisa menambahkannya di sini.
        // Contoh: $this->call([FaqSeeder::class]);
    }
}