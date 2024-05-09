<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('langs')->insert([
            [
                'description' => 'Ingles',
                'code' => 'en',
                'visible' => '1',
                'status' => '1',
            ]
            // Agrega más datos si es necesario
        ]);
    }
}
