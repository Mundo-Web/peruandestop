<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntradasMultiples extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Que harás',
            ]
        ]);
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Que incluye',
            ]
        ]);
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Que no incluye',
            ]
        ]);
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Que llevar',
            ]
        ]);
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Que no esta permitido',
            ]
        ]);
        DB::table('tipo_entradas')->insert([
            [
                'description' => 'Información Importante',
            ]
        ]);
        
    }
}
