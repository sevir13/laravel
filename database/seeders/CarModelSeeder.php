<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("car_models")->insert([
            [
                "name" => "AUDI"
            ],
            [
                "name" => "BENTLEY"
            ],
            [
                "name" => "BMW"
            ],
            [
                "name" => "CHEVROLET"
            ],
            [
                "name" => "CITROEN"
            ],
            [
                "name" => "FIAT"
            ],
            [
                "name" => "HONDA"
            ],
            [
                "name" => "LADA"
            ]
        ]);
    }
}
