<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SecurityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'symbol' => fake()->name()
        ];
    }
}
