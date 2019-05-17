<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Book::class, function (Faker $faker) {
    return [
        'isbn' => $faker->isbn13,
        'name' => $faker->realText($faker->numberBetween(30,60)),
        'publisher' => $faker->company,
        'edition' => $faker->numberBetween(1,10).'°',
        'author' => $faker->name,
        'category' => $faker->randomElement(['Salud','Ciencia','Física','Matemática','Química','Informática','Psicología','Historia']),
        'condition' => $faker->boolean,
        ];
});
