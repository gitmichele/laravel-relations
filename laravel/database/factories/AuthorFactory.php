<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstName,
        'lastname' => $faker -> lastName,
        'nationality' => $faker -> country,
        'age' => $faker -> numberBetween(25, 80),
        'email' => $faker -> email,
    ];
});
