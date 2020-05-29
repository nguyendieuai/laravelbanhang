<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    $orderID = App\Models\Order::pluck('id')->toArray();
    $productID = App\Models\Product::pluck('id')->toArray();
    return [
        'dongia' => 100000,
        'soluongmua' =>$faker->numberBetween(10,100),
        'order_id' => $faker->randomElement($orderID),
        'product_id' =>$faker->randomElement($productID),
    ];
});
