<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'direccion'=>$this->faker->sentence(),
            'poblacion'=>$this->faker->sentence(),
            'provincia'=>$this->faker->sentence(),
            'numero'=>$this->faker->unique()->numberBetween(1,1000),
            'fecha'=>$this->faker->date(),
            
        ];
    }
}
