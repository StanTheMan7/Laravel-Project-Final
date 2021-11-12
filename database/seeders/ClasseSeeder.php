<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'url'=>'1.jpg',
                'title'=>'Football',
                'name'=>'Sathi Bhuiya',
                'time'=>'8 AM - 12 PM',
                'date'=>'2021-11-10',
                'category_id'=>1,
                'trainer_id'=>1,
                'nrMax'=>15,
                'status_id'=>2,
                "created_at"=>now()
                
            ],
            [
                'url'=>'2.jpg',
                'title'=>'Yoga',
                'name'=>'Sathi Bhuiya',
                'time'=>'12 PM - 3 PM',
                'date'=>'2021-11-10',
                'category_id'=>2,
                'trainer_id'=>2,
                'nrMax'=>15,
                'status_id'=>2,
                "created_at"=>now()
            ],
            [
                'url'=>'3.jpg',
                'title'=>'Dances',
                'name'=>'Sathi Bhuiya',
                'time'=>'3 PM - 6 PM',
                'date'=>'2021-11-10',
                'category_id'=>3,
                'trainer_id'=>3,
                'nrMax'=>15,
                'status_id'=>2,
                "created_at"=>now()
            ],   
        ]);
    }
}
