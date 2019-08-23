<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image' => $faker->image($dir, $width, $height, 'cats'),
        'price' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'category_id' => $faker->foreignerIdNumber
    ];
});
