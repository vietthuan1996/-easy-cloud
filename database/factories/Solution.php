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

$factory->define(App\Solution::class, function (Faker $faker) {
    $temp = $faker->sentence(10);
    return [
        'name' => $temp,
        'slug' => str_slug($temp),
        'content' => $faker->sentence(1000),
        'describe' => $faker->sentence(1000),
        'link' => 'youtube.com',
        'type_show' => $faker->numberBetween(1, 0)

    ];
});
