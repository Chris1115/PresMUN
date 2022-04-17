<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChacoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(1,3)),
            'slogan' => $this->faker->sentence(mt_rand(5,10)),
            'description' => $this->faker->paragraph(mt_rand(1,2))
        ];
    }
}
