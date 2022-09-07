<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\OrderAdmin;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\ServiceType;
use App\Models\UserOrder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
            Order::factory(10)->create();
            Service::factory(10)->create();
            ServiceOrder::factory(10)->create();
            UserOrder::factory(10)->create();
//            OrderAdmin::factory(10)->create();
            ServiceType::factory(10)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
