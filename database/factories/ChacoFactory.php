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
            'c_name' => $this->faker->sentence(mt_rand(1,3)),
            'c_description' => $this->faker->paragraph(mt_rand(1,2))
        ];
    }
}
