<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [            
            'nombre' => $this->faker->sentence(2),
            'descripcion' => $this->faker->sentence(20),
            'precio' => $this->faker->numberBetween(100, 2000),                       
            'category_id' => rand(1,2),
        ];
    }
}
