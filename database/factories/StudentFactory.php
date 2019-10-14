<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gender' => $faker->randomElement(['F', 'M']),
        'rg' => $faker->numberBetween(1111111, 9999999),
        'cpf' => $faker->numberBetween(11111111111, 99999999999),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'hometown' => $faker->city,
        'address' => $faker->streetAddress,
        'birth_date' => $faker->date(),
    ];
});
