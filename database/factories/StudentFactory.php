<?php
use \App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'dni' => (string) $faker->randomNumber(8, true),
        'name' => $faker->name,
        'career' => $faker->randomElement(['Ingenieria','Kinesiologia','Abogacia','Arquitectura','Diseño','Contador','Psicología','Nutricion']),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
    ];
});
