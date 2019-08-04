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
            CarouselItemsTableSeeder::class,
            GalleryItemsTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            MessagesTableSeeder::class,
            JobsTableSeeder::class,
        ]);
    }
}
