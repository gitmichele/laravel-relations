<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Library;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'name' => $faker -> streetName . ' Library',
        'address' => $faker -> streetAddress,
        'city' => $faker -> city,
        'state' => $faker -> state,
        'seats' => $faker -> numberBetween(100, 1500),
        'phone_number' => $faker -> phoneNumber,
    ];
});
