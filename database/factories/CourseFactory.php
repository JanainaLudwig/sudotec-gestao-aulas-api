<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'project_id' => Project::all()->random()->id,
        'name' => $faker->word,
        'description' => $faker->sentence,
        'status' => 'active',
    ];
});
