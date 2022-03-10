<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;

class LineaPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'concepto'=>$this->faker->sentence(),
            'unidades'=>$this->faker->numberBetween(1,10),
            'precio'=>$this->faker->numberBetween(1,10000),
            'pedido_numero'=>function(){
                return Pedido::factory()->create()->numero;
            },
        ];
    }
}
