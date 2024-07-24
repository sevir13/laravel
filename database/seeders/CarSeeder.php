<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                "name" => Str::random(10),
                "car_comfort_id" => 1,
                "car_model_id" => 2,
                "car_driver_id" => 1,
                "travel_start" => "2024-07-20 10:00:00",
                "travel_end" => "2024-07-20 18:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 1,
                "car_model_id" => 2,
                "car_driver_id" => 2,
                "travel_start" => "2024-07-20 13:00:00",
                "travel_end" => "2024-07-20 17:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 1,
                "car_model_id" => 3,
                "car_driver_id" => 3,
                "travel_start" => "2024-07-20 09:00:00",
                "travel_end" => "2024-07-20 16:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 3,
                "car_model_id" => 6,
                "car_driver_id" => 4,
                "travel_start" => "2024-07-20 08:00:00",
                "travel_end" => "2024-07-20 12:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 2,
                "car_model_id" => 4,
                "car_driver_id" => 5,
                "travel_start" => "2024-07-20 10:00:00",
                "travel_end" => "2024-07-20 18:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 3,
                "car_model_id" => 7,
                "car_driver_id" => 6,
                "travel_start" => "2024-07-20 09:00:00",
                "travel_end" => "2024-07-20 18:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 2,
                "car_model_id" => 4,
                "car_driver_id" => 7,
                "travel_start" => "2024-07-20 10:00:00",
                "travel_end" => "2024-07-20 16:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 3,
                "car_model_id" => 8,
                "car_driver_id" => 8,
                "travel_start" => "2024-07-20 10:00:00",
                "travel_end" => "2024-07-20 14:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 4,
                "car_model_id" => 8,
                "car_driver_id" => 1,
                "travel_start" => "2024-07-20 08:00:00",
                "travel_end" => "2024-07-20 14:00:00"
            ],
            [
                "name" => Str::random(10),
                "car_comfort_id" => 4,
                "car_model_id" => 8,
                "car_driver_id" => 2,
                "travel_start" => "2024-07-20 10:00:00",
                "travel_end" => "2024-07-20 18:00:00"
            ]
        ]);
    }
}
