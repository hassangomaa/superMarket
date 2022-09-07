<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "⭐ تفعيل يوتيوب ",
//            'details' => "♔ البدأ : 1 ~ 120 ساعة" ,
//            'status' => "قيد الانتظار",
            'link' => fake()->address(),
            'price' => fake()->randomDigitNotZero(),
            'quantity' => fake()->randomDigitNotZero(),
//            'orderid' => fake()->randomDigitNotZero(),
            'user_id' => fake()->randomDigitNotZero(),
            'status_id' => fake()->randomDigitNotZero(),

            //
        ];
    }
}
