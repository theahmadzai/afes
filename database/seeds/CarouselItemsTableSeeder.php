<?php

use Illuminate\Database\Seeder;
use App\CarouselItem;
use App\Image;

class CarouselItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarouselItem::class, 5)->create()->each(function ($carouselItem) {
            $carouselItem->image()->save(factory(Image::class)->make());
        });
    }
}
