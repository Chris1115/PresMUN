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
            'image' => $this->faker->image(),
            'name' => $this->faker->name(),
            'role' => $this->faker->sentence(mt_rand(2,4)),
            'achievements' => $this->faker->sentence(mt_rand(10,30)),
            'description' => $this->faker->paragraph(mt_rand(1,3))
        ];
    }
}
