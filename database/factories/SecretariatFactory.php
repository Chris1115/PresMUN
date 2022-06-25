<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SecretariatFactory extends Factory
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
            'subdivisions_id' => mt_rand(1,8),
            's_name' => $this->faker->name(),
            's_achievements' => $this->faker->sentence(mt_rand(10,20)),
            's_description' => $this->faker->paragraph(mt_rand(1,3))
        ];
    }
}
