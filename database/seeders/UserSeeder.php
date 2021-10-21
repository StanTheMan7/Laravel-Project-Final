<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    "name" => "admin",
                    "email"=> "admin@admin.com",
                    "password" => Hash::make("admin12345"),
                    "role_id"=> 1,
                    "created_at"=>now()
                ],
                [
                    "name" => "manager",
                    "email"=> "manager@gmail.com",
                    "password" => Hash::make("manager12345"),
                    "role_id"=> 2,
                    "created_at"=>now()
                ],
                [
                    "name" => "coach",
                    "email"=> "coach@gmail.com",
                    "password" => Hash::make("coachb12345"),
                    "role_id"=> 3,
                    "created_at"=>now()
                ],
                
                [
                    "name" => "user",
                    "email"=> "user@gmail.com",
                    "password" => Hash::make("user12345"),
                    "role_id"=> 4,
                    "created_at"=>now()
                ]
        ]);
    }
}
