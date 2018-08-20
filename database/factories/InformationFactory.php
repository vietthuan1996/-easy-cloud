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

$factory->define(App\Information::class, function (Faker $faker) {
    return [
        'company_name' => 'enterprise cloud',
        'address' => '1237/17 Hoàng Sa, Phường 5, Quận Tân Bình, TP.HCM',
        'hotline' => $faker->randomDigit(10),
        'email' => 'easycloud@gmail.com',
        'website' => 'http://entcloud.vn',
        'describe' => $faker->sentence(150)
    ];
});
