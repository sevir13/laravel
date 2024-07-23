<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 1,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 2,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 3,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 4,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 1,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 2,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 3,
                "password" => Hash::make('password')
            ],
            [
                "name" => Str::random(10),
                "email" => Str::random(10) . "@example.com",
                "role_id" => 4,
                "password" => Hash::make('password')
            ]
        ]);
    }
}
