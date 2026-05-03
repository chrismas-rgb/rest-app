<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(10000, 50000),
            'category_id' => $this->faker->numberBetween(1, 2),
            'description' => $this->faker->sentence(),
            'img' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
