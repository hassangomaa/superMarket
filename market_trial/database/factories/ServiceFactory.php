<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name(),
            'price' => fake()->randomDigitNotZero() ,
            'mini' => fake()->randomDigitNotZero() ,
            'max' => fake()->randomDigitNotZero(),
            'timeaverage' => fake()->dayOfWeek ,
            'details' => fake()->text ,

        ];
    }
}
