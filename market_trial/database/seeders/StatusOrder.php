<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
class StatusOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('status_orders')->insert([

           [
               'name' => "مكتمل",
           ],
               [
               'name' => " مكتمل جزئيا",
           ],
               [
               'name' => "قيد اﻻنتظار",
           ],
               [
               'name' => "جاري التنفيذ",
           ],
               [
               'name' => "مكتمل",
           ],
               [
               'name' => "ملغي",
           ],
     [
               'name' => "ملغي",
           ],
     [
               'name' => "ملغي",
           ],
     [
               'name' => "ملغي",
           ],

        ]);


    }
}
