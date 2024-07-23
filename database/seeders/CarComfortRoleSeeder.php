<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarComfortRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("car_comfort_role")->insert([
            [
                "car_comfort_id" => 1,
                "role_id" => 1
            ],
            [
                "car_comfort_id" => 2,
                "role_id" => 1
            ],
            [
                "car_comfort_id" => 3,
                "role_id" => 1
            ],
            [
                "car_comfort_id" => 4,
                "role_id" => 1
            ],
            [
                "car_comfort_id" => 2,
                "role_id" => 2
            ],
            [
                "car_comfort_id" => 3,
                "role_id" => 2
            ],
            [
                "car_comfort_id" => 4,
                "role_id" => 4
            ],
            [
                "car_comfort_id" => 3,
                "role_id" => 3
            ],
            [
                "car_comfort_id" => 4,
                "role_id" => 3
            ],
            [
                "car_comfort_id" => 4,
                "role_id" => 4
            ]
        ]);
    }
}
