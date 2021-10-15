<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'logo'=>'logo.png',
            'li1'=>'Home',
            'li2'=>'About',
            'li3'=>'Classes',
            'li4'=>'Gallery',
            'li5'=>'Contact'
        ]);
    }
}
