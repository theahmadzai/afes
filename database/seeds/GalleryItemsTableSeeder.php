<?php

use Illuminate\Database\Seeder;

class GalleryItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\GalleryItem::class, 5)->create();
    }
}
