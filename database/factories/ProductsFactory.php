<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $filePath = storage_path('app/public/products');
    return [
        'name' => $faker->word,
        'image' => $faker->image($filePath, $width = 640, $height = 480, 'cats', false),
        'price' => $faker->randomFloat(2, 100, 999),
        'category_id' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
