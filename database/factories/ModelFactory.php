<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'phone' => $faker->unique()->phoneNumber,
        'password' => $password ?: $password = ('secret'),
        'remember_token' => str_random(10),
        'designation' => $faker->sentence(3),
        'role_id'     => $faker->numberBetween(1, 10)
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->unique()->sentence(2),
        'tag' => $faker->sentence(3)
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->unique()->sentence(5),
        'desc' => $faker->paragraph(3),
        'location' => $faker->city,
        'capacity' => $faker->numberBetween(300, 1000),
        'starting_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'ending_date'   => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
    ];
});
