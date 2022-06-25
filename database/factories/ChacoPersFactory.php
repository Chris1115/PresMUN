<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChacoPersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chacos_id' => mt_rand(1,8),
            'cp_name' => $this->faker->name(),
            'cp_achievements' => $this->faker->sentence(mt_rand(10,30)),
            'cp_description' => $this->faker->paragraph(mt_rand(1,2))
        ];
    }
}
