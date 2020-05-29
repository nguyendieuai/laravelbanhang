<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customerID = App\Models\Customer::pluck('id')->toArray();
    return [
        'ngaylaphoadon' => $faker->date(),
        'diachigiaohang' => $faker->streetAddress,
        'tien' => 1000000,
        'ghichu' => "note",
        'customer_id' => $faker ->randomElement($customerID)
    ];
});
