<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'icon'=>'zmdi zmdi-quote',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam',
                'url'=>'signature.png',
                'function'=>'Co-Founder Of Company'
            ],
            [
                'icon'=>'zmdi zmdi-quote',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam',
                'url'=>'signature.png',
                'function'=>'Co-Founder Of Company'
            ],
            [
                'icon'=>'zmdi zmdi-quote',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam',
                'url'=>'signature.png',
                'function'=>'Co-Founder Of Company'
            ],
            [
                'icon'=>'zmdi zmdi-quote',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam',
                'url'=>'signature.png',
                'function'=>'Co-Founder Of Company'
            ]
        ]);
    }
}
