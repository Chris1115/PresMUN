<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'd_name' => $this->faker->sentence(mt_rand(2,4)),
            'd_description' => $this->faker->paragraph(mt_rand(1,2))
        ];
    }
}
