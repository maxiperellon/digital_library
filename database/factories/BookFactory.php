<?php

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'isbn' => Str::random(13),
        'name' => $faker->sentence,
        'publisher' => $faker->name,
        'edition' => $faker->numberBetween(1,10),
        'author' => $faker->name,
        'category' => $faker->name,
    ];
});
