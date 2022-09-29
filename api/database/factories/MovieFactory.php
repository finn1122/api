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
            'image' => $this->faker->randomElement(['https://static.wikia.nocookie.net/doblaje/images/b/b2/651x0w.jpg/revision/latest?cb=20190310131200&path-prefix=es', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.filmaffinity.com%2Fes%2Ffilm570857.html&psig=AOvVaw05JUQQ55IdsARyaDrWQ9o7&ust=1664491138138000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCOiX_erGuPoCFQAAAAAdAAAAABAD']),


        ];
    }
}
