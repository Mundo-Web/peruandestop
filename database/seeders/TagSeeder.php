<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tag = ['Tour Gastronómico', 'Aventura', 'Excursión', 'Visita a museos históricos'];
        for ($i = 0; $i < 4; $i++) {
            Category::create([
                'name' => $cat[$i],
                'description' => 'Aquí va la descripción del destino '.$cat[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
