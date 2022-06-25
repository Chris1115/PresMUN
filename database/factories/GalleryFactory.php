<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\PseudoTypes\True_;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ga_title' => $this->faker->sentence(mt_rand(2,4))
        ];
    }
}
