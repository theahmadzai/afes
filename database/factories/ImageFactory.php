<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $imageableType = $faker->randomElement([
        App\GalleryItem::class,
        App\CarouselItem::class
    ]);

    return [
        'caption' => $faker->sentence(6),
        'filename' => 'placeholder.jpg',
        'imageable_id' => factory($imageableType)->create()->id,
        'imageable_type' => $imageableType
    ];
});
