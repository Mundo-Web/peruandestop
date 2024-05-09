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
        
        
            Tag::create([
                'name' =>  'Tour gastronómicos',
                'description' => 'Aquí va la descripción del destino Tour gastronómicos',
                'status' => 1,
                'visible' => 1,
                'langs' => 'en'
            ]);
        
    }
}
