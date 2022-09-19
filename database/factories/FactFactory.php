<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'attribute_id' => fake()->numberBetween(1, 10),
            'security_id'  => fake()->numberBetween(1, 10),
            'value' => fake()->randomFloat(2, 0, 100),
        ];
    }
}
