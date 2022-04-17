<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image(),
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'headline' => $this->faker->sentence(mt_rand(10,20)),
            'description' => $this->faker->paragraph(mt_rand(4,6))
        ];
    }
}
