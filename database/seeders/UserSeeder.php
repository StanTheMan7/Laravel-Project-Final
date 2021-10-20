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
                   
                ],
                [
                    "name" => "manager",
                    "email"=> "manager@gmail.com",
                    "password" => Hash::make("manager12345"),
                   
                ],
                [
                    "name" => "coach",
                    "email"=> "coach@gmail.com",
                    "password" => Hash::make("coachb12345"),
                   
                ],
                
                [
                    "name" => "user",
                    "email"=> "user@gmail.com",
                    "password" => Hash::make("user12345"),
                    
                ]
        ]);
    }
}
