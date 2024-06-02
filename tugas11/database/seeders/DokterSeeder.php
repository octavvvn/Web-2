<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unit1 = UnitKerja::create(['nama' => 'Unit Kerja 1']);
        $unit2 = UnitKerja::create(['nama' => 'Unit Kerja 2']);
        $unit3 = UnitKerja::create(['nama' => 'Unit Kerja 3']);
        $unit4 = UnitKerja::create(['nama' => 'Unit Kerja 4']);
        $unit5 = UnitKerja::create(['nama' => 'Unit Kerja 5']);

        Dokter::create([
            'nama' => 'Dr. Ilham Adika',
            'spesialis' => 'Dokter Umum',
            'unit_kerja_id' => $unit1->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Dokter::create([
            'nama' => 'Dr. Ilham Pramdana',
            'spesialis' => 'Dokter Bedah',
            'unit_kerja_id' => $unit2->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Dokter::create([
            'nama' => 'Dr. Kinan Rinjani',
            'spesialis' => 'Dokter Anak',
            'unit_kerja_id' => $unit3->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Dokter::create([
            'nama' => 'Dr. Cut Marie',
            'spesialis' => 'Dokter Saraf',
            'unit_kerja_id' => $unit4->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Dokter::create([
            'nama' => 'Dr. Hardian Wijaya',
            'spesialis' => 'Dokter Gigi',
            'unit_kerja_id' => $unit5->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
