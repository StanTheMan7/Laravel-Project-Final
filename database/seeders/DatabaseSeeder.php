<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HeaderSeeder::class,
            TitleSeeder::class,
            BackgroundSeeder::class,
            AboutSeeder::class,
            ClasseSeeder::class,
            TrainerSeeder::class,
            GallerySeeder::class,
            EventSeeder::class,
            PricingSeeder::class,
            ClientSeeder::class,
            NewsletterSeeder::class,
            FooterSeeder::class,
            TweetSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ContactSeeder::class
        ]);
    }
}
