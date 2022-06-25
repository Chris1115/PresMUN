<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GossipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'g_title' => $this->faker->sentence(mt_rand(2,4)),
            'g_message' => $this->faker->sentence(mt_rand(2,4)),
            'g_receiver' => $this->faker->name(),
            'g_sender' => $this->faker->name(),
        ];
    }
}
