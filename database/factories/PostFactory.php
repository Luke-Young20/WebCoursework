<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->sentence,
            'author_id' => Author::all()->first()->id,
            //make this a variable
            //'author_id' => $this->faker->numberBetween($min = 1, $max = 15),
        ];
    }
}
