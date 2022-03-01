<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Factura::factory(20)->create()->each(function ($factura){
            $lineas=\App\Models\Linea::factory(5)-create();
            $factura->lineas()->saveMany($lineas);
       
        });
      
    }
}
