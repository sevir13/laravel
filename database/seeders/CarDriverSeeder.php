<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarDriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("car_drivers")->insert([
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ],
            [
                "surname" => Str::random(15),
                "name" => Str::random(5)
            ]
        ]);
    }
}
