<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('regions')->insert([
            ['name' => 'Москва'],
            ['name' => 'Санкт-Петербург'],
            ['name' => 'Новосибирская область'],
            ['name' => 'Краснодарский край'],
            ['name' => 'Татарстан'],
        ]);
    }
}
