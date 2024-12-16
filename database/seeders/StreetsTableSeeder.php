<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StreetsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('streets')->insert([
            ['name' => 'Ленинский проспект', 'city_id' => 1],
            ['name' => 'Невский проспект', 'city_id' => 2],
            ['name' => 'Красный проспект', 'city_id' => 3],
            ['name' => 'Улица Красная', 'city_id' => 4],
            ['name' => 'Улица Баумана', 'city_id' => 5],
        ]);
    }
}
