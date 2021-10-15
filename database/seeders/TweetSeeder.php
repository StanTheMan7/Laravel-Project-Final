<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            'title'=>'Recent Tweets',
            'icon4'=>'zmdi zmdi-twitter',
            'text2'=>'@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!',
            'link1'=>'https://twitter.com/login',
            'icon5'=>'zmdi zmdi-twitter',
            'text3'=>'@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!',
            'link2'=>'https://twitter.com/login',
        ]);
    }
}
