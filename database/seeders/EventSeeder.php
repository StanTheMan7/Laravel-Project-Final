<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title'=>'Yoga celebration in Handstand',
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
            'date'=>'25 March 2016',
            'time'=>'10AM - 12AM'
        ]);
    }
}
