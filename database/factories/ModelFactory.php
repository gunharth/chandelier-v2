<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->word,
        'name' => $faker->sentence,
        'description' => $faker->name,
        'active' => true,
        'saleable' => true,
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'client' => $faker->company,
        'project' => 'project ' . $faker->word,
        'client_ref' => $faker->name,

    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->text,
        'product_id' => $faker->numberBetween(1, 10),
    ];
});
