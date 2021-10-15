<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backgrounds')->insert([
            [
                'title'=>'Welcome Our Handstand',
                'bigTitle'=>'Keep Refresh & Strong Your Body',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.',
                'url'=>'img/slider/slider1.jpg',
                'button'=>'salam'
            ],
            [
                'title'=>'Welcome Our Handstand',
                'bigTitle'=>'Keep Refresh & Strong Your Body',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.',
                'url'=>'img/slider/slider2.jpg',
                'button'=>'alecum'
            ],
        ]);
    }
}
