<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarComfortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("car_comforts")->insert([
            [
                "name" => "Первая категория комфорта"
            ],
            [
                "name" => "Вторая категория комфорта"
            ],
            [
                "name" => "Третья категория комфорта"
            ],
            [
                "name" => "Четвертая категория комфорта"
            ]
        ]);
    }
}
