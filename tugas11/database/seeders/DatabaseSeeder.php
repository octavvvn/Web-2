<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil UnitKerjaSeeder terlebih dahulu
        $this->call([
            UnitKerjaSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            PeriksaSeeder::class,
            // Panggil seeder lainnya di sini jika ada
        ]);

        // Setelah UnitKerjaSeeder dijalankan, buat User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
