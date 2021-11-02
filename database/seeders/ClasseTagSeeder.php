<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classe_tag')->insert([
            [
                'classe_id'=>1,
                'tag_id'=>1
            ],
            [
                'classe_id'=>1,
                'tag_id'=>2
            ],
            [
                'classe_id'=>1,
                'tag_id'=>3
            ],
            [
                'classe_id'=>2,
                'tag_id'=>1
            ],
            [
                'classe_id'=>2,
                'tag_id'=>2
            ],
            [
                'classe_id'=>2,
                'tag_id'=>3
            ],
            [
                'classe_id'=>3,
                'tag_id'=>1
            ],
            [
                'classe_id'=>3,
                'tag_id'=>2
            ],
            [
                'classe_id'=>3,
                'tag_id'=>3
            ]
        ]);
    }
}
