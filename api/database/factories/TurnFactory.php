<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TurnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'turn_date' => $this->faker->dateTime(),
            'active' => $this->faker->boolean(),
        ];
    }
}
