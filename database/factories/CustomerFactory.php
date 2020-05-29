<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'sdt' => $faker->phoneNumber,
        'diachi' => $faker->address,
    ];
});
