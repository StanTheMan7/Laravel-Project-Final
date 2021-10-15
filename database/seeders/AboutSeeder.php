<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title'=>'about our handstand',
            'description1'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, lorem ipsum is.",
            'description2'=>"but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and is more recently with desktop publishing software like Aldus PageMaker including versions.",
            'url'=>'img/about/about.jpg',
            'video'=>'https://www.youtube.com/watch?v=A47zwWsjXgs',
            'button'=>'read more'
        ]);
    }
}
