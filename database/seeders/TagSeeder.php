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
        $tag = ['Tour gastronómicos', 'Visita a monumentos historicos', 'Recorrido en bicicleta', 'Excursion en senderismo', 'Tour de Vinos', 'Paseo en Barco', 'Visita a museos y galerías de arte'];
        for ($i = 0; $i < 7; $i++) {
            Tag::create([
                'name' => $tag[$i],
                'description' => 'Aquí va la descripción del destino '.$tag[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
