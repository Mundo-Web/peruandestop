<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tag = ['Tour gastronómicos'];
        for ($i = 0; $i < 7; $i++) {
            Tag::create([
                'name' => $tag[$i],
                'description' => 'Aquí va la descripción del destino '.$tag[$i],
                'status' => 1,
                'visible' => 1,
                'langs' => 'en'
            ]);
        }
    }
}
