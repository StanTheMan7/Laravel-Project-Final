<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [ 
                'url'=>'img/portfolio/gal.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [
                'url'=>'img/portfolio/gal2.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'img/portfolio/gal3.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'img/portfolio/gal4.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'img/portfolio/gal5.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [
                'url'=>'img/portfolio/gal6.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'img/portfolio/gal7.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'img/portfolio/gal8.jpg',
                'icon'=>''
            ],
            [ 
                'url'=>'img/portfolio/gal9.jpg',
                'icon'=>''
            ]
        ]);
    }
}
