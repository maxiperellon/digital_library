<?php

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'isbn' => $faker->isbn13,
        'name' => $faker->sentence,
        'publisher' => $faker->company,
        'edition' => $faker->numberBetween(1,10),
        'author' => $faker->name,
        'category' => $faker->languageCode,
    ];
});
