<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(2),
            'author' => $this->faker->name(),
            'year' => $this->faker->year('+10 years'),
            'synopsis' => $this->faker->sentence(30),
            'image' => $this->faker->imageUrl(640, 480, 'books', true)
        ];
    }
}
