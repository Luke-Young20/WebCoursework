<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commentText' => $this->faker->sentence(),
            'author_id' => $this->faker->numberBetween($min = 1, $max = Author::all()->count()),
            'post_id' => $this->faker->numberBetween($min = 1, $max = Author::all()->count()),
        ];
    }
}
