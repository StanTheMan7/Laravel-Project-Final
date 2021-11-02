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
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm',
                'category_id'=>1,
                "created_at"=>now()

            ],
            [
                'url'=>'2.jpg',
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm',
                'category_id'=>2,
                "created_at"=>now()
                
            ],
            [
                'url'=>'3.jpg',
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm',
                'category_id'=>3,
                "created_at"=>now()
            ],   
        ]);
    }
}
