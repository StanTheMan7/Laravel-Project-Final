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
                'url'=>'gal.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [
                'url'=>'gal2.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal3.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal4.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal5.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [
                'url'=>'gal6.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal7.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal8.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ],
            [ 
                'url'=>'gal9.jpg',
                'icon'=>'zmdi zmdi-zoom-in'
            ]
        ]);
    }
}
