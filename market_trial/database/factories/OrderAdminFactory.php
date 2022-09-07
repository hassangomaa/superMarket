<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderAdmin>
 */
class OrderAdminFactory extends Factory
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
//            'name' => "🌐 زيارات مواقع الويب من كندا< ",
//            'name' => "🌐 زيارات مواقع الويب من كندا< ",
//            'details' => "♔ البدأ : 1 ~ 120 ساعة" ,
            'orderid' => fake()->randomDigitNotZero(),
            'userid' => fake()->randomDigitNotZero(),

        ];
    }
}
