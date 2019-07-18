<?php

use Illuminate\Database\Seeder;

class CarouselItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CarouselItem::class, 5)->create();
    }
}
