<?php

use Illuminate\Database\Seeder;
use App\Slide;
use App\File;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Slide::class, 5)->create()->each(function ($slide) {
            $slide->file()->save(factory(File::class)->make());
        });
    }
}
