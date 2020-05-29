<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'anh' => $faker->imageUrl(),
        'gia'=> $faker->numberBetween(1000, 10000000),
        'soluong'=>$faker->numberBetween(1,100),
        'category_id' =>$faker->numberBetween(1,2),
    ];
});
