<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blood_types')->insert([
            ['name' => 'A'],
            ['name' => 'B'],
            ['name' => 'AB'],
            ['name' => 'O'],
        ]);
    }
}
