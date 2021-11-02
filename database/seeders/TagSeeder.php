<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                "name"=>"football"
            ],
            [
                "name"=>"outside"
            ],
            [
                "name"=>"inside"
            ],
            [
                "name"=>"in group"
            ],
            [
                "name"=>"duo"
            ],
            [
                "name"=>"cardio"
            ],
            [
                "name"=>"musculation"
            ],
            [
                "name"=>"meditation"
            ]
        ]);
    }
}
