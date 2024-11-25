<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Types extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Insertar registros en la tabla
         DB::table('types')->insert([
            'name' => 'ESTANDAR',
            'created_at' => '2024-11-23 15:45:08.000',
            'updated_at' => '2024-11-23 15:45:08.000',
            // Más campos y valores
        ]);
        DB::table('types')->insert([
            'name' => 'JUNIOR',
            'created_at' => '2024-11-23 15:45:08.000',
            'updated_at' => '2024-11-23 15:45:08.000',
            // Más campos y valores
        ]);
        DB::table('types')->insert([
            'name' => 'SUITE',
            'created_at' => '2024-11-23 15:45:08.000',
            'updated_at' => '2024-11-23 15:45:08.000',
            // Más campos y valores
        ]);
    }
}
