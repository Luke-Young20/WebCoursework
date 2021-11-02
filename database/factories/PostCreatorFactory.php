<?php

namespace Database\Factories;
use App\Models\PostCreator;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
        ];
    }
}
