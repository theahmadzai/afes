<?php

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
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            ImagesTableSeeder::class,
            SlidesTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            MessagesTableSeeder::class,
            JobsTableSeeder::class,
            ApplicationsTableSeeder::class,
            SubscribersTableSeeder::class,
        ]);
    }
}
