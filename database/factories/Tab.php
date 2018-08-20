<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Tab::class, function (Faker $faker) {
    $temp = $faker->sentence(10);
    return [
        'id_cate' => $faker->numberBetween(1, 2),
        'type_post' => rand(0, 1) ? 'service' : 'solution',
        'slug' => $temp,
        'name' => $temp,
        'content' => $faker->sentence(1000)
    ];
});
