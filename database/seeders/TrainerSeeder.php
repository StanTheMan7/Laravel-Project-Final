<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            [
                'url'=>'trainer1.jpg',
                'name'=>'John laisa do',
                'icon1'=>'fa fa-facebook',
                'icon2'=>'fa fa-twitter',
                'icon3'=>'fa fa-dribbble',
                'icon4'=>'fa fa-pinterest',
                'link1'=>'https://www.facebook.com/',
                'link2'=>'https://twitter.com/',
                'link3'=>'https://dribbble.com/',
                'link4'=>'https://www.pinterest.com/'
            ],
            [
                'url'=>'trainer2.jpg',
                'name'=>'John laisa do',
                'icon1'=>'fa fa-facebook',
                'icon2'=>'fa fa-twitter',
                'icon3'=>'fa fa-dribbble',
                'icon4'=>'fa fa-pinterest',
                'link1'=>'https://www.facebook.com/',
                'link2'=>'https://twitter.com/',
                'link3'=>'https://dribbble.com/',
                'link4'=>'https://www.pinterest.com/'
            ],
            [
                'url'=>'trainer3.jpg',
                'name'=>'John laisa do',
                'icon1'=>'fa fa-facebook',
                'icon2'=>'fa fa-twitter',
                'icon3'=>'fa fa-dribbble',
                'icon4'=>'fa fa-pinterest',
                'link1'=>'https://www.facebook.com/',
                'link2'=>'https://twitter.com/',
                'link3'=>'https://dribbble.com/',
                'link4'=>'https://www.pinterest.com/'
            ],
            
        ]);
    }
}
