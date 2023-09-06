<?php

namespace Database\Factories;

use App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Shop::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(20),
            'is_Active' => true,
        ];
    }
}
