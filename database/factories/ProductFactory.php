<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(1, 3),
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(10, 30),
    ];
});
