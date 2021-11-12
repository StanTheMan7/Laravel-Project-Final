<?php

namespace Database\Seeders;

use App\Models\Classe;
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
            StatusSeeder::class,
            PricingSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            TrainerSeeder::class,
            HeaderSeeder::class,
            TitleSeeder::class,
            BackgroundSeeder::class,
            AboutSeeder::class,
            ClasseSeeder::class,
            GallerySeeder::class,
            EventSeeder::class,
            ClientSeeder::class,
            NewsletterSeeder::class,
            FooterSeeder::class,
            TweetSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            TagSeeder::class,
            ClasseTagSeeder::class,
        ]);
    }
}
