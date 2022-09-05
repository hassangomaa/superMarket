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
            'details' => "♔ البدأ : 1 ~ 120 ساعة
♘ السرعة : +500
❀ الضمان : نعم
♙ الجودة : حقيقية
♖ السقوط : عدم السقوط" ,
            'link' => fake()->address(),
            'quantity' => fake()->randomDigitNotZero(),

            //
        ];
    }
}
