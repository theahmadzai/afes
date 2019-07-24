<?php

use Illuminate\Database\Seeder;
use App\GalleryItem;
use App\Image;

class GalleryItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GalleryItem::class, 10)->create()->each(function ($galleryItem) {
            $galleryItem->image()->save(factory(Image::class)->make());
        });
    }
}
