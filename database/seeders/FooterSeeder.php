<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'url'=>'img/logo/logo.png',
            'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. Ut ',
            'icon1'=>'zmdi zmdi-email',
            'icon2'=>'zmdi zmdi-phone',
            'icon3'=>'zmdi zmdi-home',
            'email'=>'username@gmail.com',
            'phone'=>'+(60 256 24857)',
            'address'=>'Your Address Here',
            'copyright'=>'Copyright © Hastech 2017. All Rights Reserved.',
        ]);
    }
}
