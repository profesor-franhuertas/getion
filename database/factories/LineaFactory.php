<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LineaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto'=>$this->faker->sentence(),
            'cantidad'=>$this->faker->numberBetween(1,10),
            'precio'=>$this->faker->randomNumber(),
            'factura'=>$this->factory(App\Models\Factura::class),
        ];
    }
}
