<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'publication_date' => $this->faker->dateTime(),
            'image' => $this->faker->image('public/storage/img' ,400,300, null, false) ,


        ];
    }
}
