<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Dokter;
class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasien_ids = Pasien::pluck('id')->toArray();
        $dokter_ids = Dokter::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            Periksa::create([
                'pasien_id' => $pasien_ids[array_rand($pasien_ids)],
                'dokter_id' => $dokter_ids[array_rand($dokter_ids)],
                'tanggal' => now(),
                'berat' => rand(50, 100),
                'tinggi' => rand(150, 200),
                'tensi' => '120/80',
                'keterangan' => 'Keterangan ' . $index,
            ]);
        }
    }
}
