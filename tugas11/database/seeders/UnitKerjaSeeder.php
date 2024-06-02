<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UnitKerja::create([
            'nama_unit' => 'Unit Kerja 1',
        ]);

        UnitKerja::create([
            'nama_unit' => 'Unit Kerja 2',
        ]);

        UnitKerja::create([
            'nama_unit' => 'Unit Kerja 3',
        ]);

        UnitKerja::create([
            'nama_unit' => 'Unit Kerja 4',
        ]);

        UnitKerja::create([
            'nama_unit' => 'Unit Kerja 5',
        ]);
    }
}
