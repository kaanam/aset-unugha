<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommodityLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            'Ruang Dosen',
            'Ruang Rektor',
            'Ruang Staff',
            'Ruang Gudang',
            'Perpustakaan Bawah',
            'Perpustakaan Atas',
            'Ruang Himpunan Mahasiswa Program Studi(HMPS)',
            'Ruang Laboratorium Komputer',
            'Ruang Laboratorium IOT',
            'Ruang Laboratorium Microtheaching',
            'Ruang Laboratorium Jaringan',
            'Ruang Laboratorium Bahasa',
            'Ruang Masjid Assegaf',
            'Ruang Wakil Rektor I',
            'Ruang Wakil Rektor II',
            'Ruang Wakil Rektor III',
            'Ruang Fakultas Matematika dan Komputer (FMIKOM)',
            'Ruang Fakultas Ekonomi (FE)',
            'Ruang Fakultas Teknologi Industri (FTI)',
            'Ruang Auditorium',
            'Ruang Aula'
        ];

        for ($i = 1; $i < count($locations); $i++) {
            DB::table('commodity_locations')->insert([
                'name' => $locations[$i],
                'description' => 'Ruangan ' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            DB::table('commodity_locations')->insert([
                'name' => 'Kelas ' . $i,
                'description' => 'Ruangan Kelas ' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
