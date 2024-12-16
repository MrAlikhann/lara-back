<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Москва', 'region_id' => 1],
            ['name' => 'Санкт-Петербург', 'region_id' => 2],
            ['name' => 'Новосибирск', 'region_id' => 3],
            ['name' => 'Краснодар', 'region_id' => 4],
            ['name' => 'Казань', 'region_id' => 5],
        ]);
    }
}
