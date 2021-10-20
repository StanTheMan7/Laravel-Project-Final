<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            [
                'package'=>'silver package',
                'price'=>'$30',
                'month'=>'/month',
                'gift1'=>'Free T-Shirt & swags',
                'gift2'=>'Free of all message treatments',
                'gift3'=>'Access Clup Facilites',
                'gift4'=>'Out Door activites',
                'button'=>'get started'
            ], 
            [
                'package'=>'gold package',
                'price'=>'$50',
                'month'=>'/month',
                'gift1'=>'Free T-Shirt & swags',
                'gift2'=>'Free of all message treatments',
                'gift3'=>'Access Clup Facilites',
                'gift4'=>'Out Door activites',
                'button'=>'get started'
            ],
            [
                'package'=>'platinum package',
                'price'=>'$70',
                'month'=>'/month',
                'gift1'=>'Free T-Shirt & swags',
                'gift2'=>'Free of all message treatments',
                'gift3'=>'Access Clup Facilites',
                'gift4'=>'Out Door activites',
                'button'=>'get started'
            ]
            
        ]);
    }
}
