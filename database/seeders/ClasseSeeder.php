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
                'url'=>'img/class/1.jpg',
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm'
            ],
            [
                'url'=>'img/class/2.jpg',
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm'
            ],
            [
                'url'=>'img/class/3.jpg',
                'title'=>'yoga for climbers',
                'name'=>'Sathi Bhuiya',
                'time'=>'10.00Am-05:00Pm'
            ],   
        ]);
    }
}
