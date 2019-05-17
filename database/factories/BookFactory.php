<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Book::class, function (Faker $faker) {
    return [
        'isbn' => (string)$faker->isbn13,
        'name' => (string)$faker->realText($faker->numberBetween(30,60)),
        'publisher' => (string)$faker->company,
        'edition' => (string)$faker->numberBetween(1,10).'°',
        'author' => (string)$faker->name,
        'category' => (string)$faker->randomElement(['Salud','Ciencia','Física','Matemática','Química','Informática','Psicología','Historia']),
        'condition' => $faker->boolean,
        ];
});
