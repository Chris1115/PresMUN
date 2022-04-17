<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubdivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'divisions_id' => mt_rand(1,8),
            'name' => $this->faker->sentence(mt_rand(2,4)),
            'slogan' => $this->faker->sentence(mt_rand(5,10)),
            'description' => $this->faker->paragraph(mt_rand(1,2))
        ];
    }
}
