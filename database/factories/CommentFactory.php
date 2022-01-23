<?php

namespace Database\Factories;

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
            'comment' => $this->faker->sentence,
            'author_id' => $this->faker->numberBetween(1, 100),
            'post_id' => $this->faker->numberBetween(1, 1500),
        ];
    }
}
