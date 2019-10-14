<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use App\Models\Grade;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    return [
        'course_id' => Course::all()->random()->id,
        'teacher_id' => User::teacher()->get()->random()->id,
        'name' => $faker->word,
        'resources' => $faker->sentence,
        'shift' => 'Matutino',
        'initial_date' => $faker->dateTime,
        'final_date' => $faker->dateTime,
        'registration_date_limit' => $faker->dateTime,
    ];
});
