<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StatusOrder>
 */
class StatusOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           [
               'name' => "مكتمل",
           ],
             [

               'name' => " مكتمل جزئيا",
             ],
                 'name' => "ملغي",
            'name' => "قيد اﻻنتظار",
            'name' => "جاري التنفيذ",
        ];
    }
}
