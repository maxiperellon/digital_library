<?php
use \App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'dni' => (string)$faker->randomNumber(8, true),
        'name' => (string)$faker->name,
        'career' => (string)$faker->randomElement(['Ingenieria','Kinesiologia','Abogacia','Arquitectura','Diseño','Contador','Psicología','Nutricion']),
        'email' => (string)$faker->unique()->safeEmail,
        'phone' => (string)$faker->phoneNumber,
        'address' => (string)$faker->address,
    ];
});
