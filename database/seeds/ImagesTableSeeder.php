<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\File;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Image::class, 10)->create()->each(function ($image) {
            $image->file()->save(factory(File::class)->make());
        });
    }
}
