<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;
use App\Models\Linea;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Producto::factory(10)->create();
        Factura::factory(20)->create();
        $facturas=Factura::all('numero');
        for ($i=0;$i<50;$i++){
         Linea::factory(1)->create(['factura_numero'=>$facturas[random_int(0,19)]]);
        }
        \App\Models\Pedido::factory(20)->create();
        \App\Models\LineaPedido::factory(50)->create();
    }
}
