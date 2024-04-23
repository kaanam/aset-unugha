<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolOperationalAssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_operational_assistances')->insert([
            'name' => 'HIBAH 1',
            'description' => 'Deskripsi HIBAH 1(Example)',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('school_operational_assistances')->insert([
            'name' => 'HIBAH 2',
            'description' => 'Deskripsi HIBAH 2(Example)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
