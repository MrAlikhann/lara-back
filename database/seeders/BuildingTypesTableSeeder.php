<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('building_types')->insert([
            ['name' => 'Жилой дом'],
            ['name' => 'Коммерческое здание'],
            ['name' => 'Склад'],
            ['name' => 'Торговый центр'],
            ['name' => 'Административное здание'],
        ]);
    }
}
