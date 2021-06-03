<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'language' => $faker -> languageCode,
        'edition_year' => $faker -> year,
        'pages' => $faker -> biasedNumberBetween($min = 60, $max = 400, $function = 'sqrt'),
        'publisher' => $faker -> randomElement($array = array (
            'Adelphi',
            'Einaudi',
            'Il Mulino',
            'Feltrinelli', 
            'Palladio Editrice', 
            'Routledge')),
        'price' => $faker -> numberBetween(10, 80),
    ];
});
