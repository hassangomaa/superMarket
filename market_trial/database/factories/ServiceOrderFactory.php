<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceOrder>
 */
class ServiceOrderFactory extends Factory
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
            'serviceid' => fake()->randomDigitNotZero() ,
            'userid' => fake()->randomDigitNotZero() ,
            'orderid' => fake()->randomDigitNotZero() ,

        ];
    }
}
