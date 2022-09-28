<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;
use App\Models\Turn;



class MoviesTurnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_id' => Movie::all()->random(1)->id,
            'turn_id' => Turn::all()->random(1)->id,

        ];
    }
}
