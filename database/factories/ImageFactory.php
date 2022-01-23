<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'url' => $this->faker->imageUrl(300, 200),
            'featured' => $this->faker->boolean,
            'post_id' => $this->faker->numberBetween(1, 1500),
        ];
    }
}
