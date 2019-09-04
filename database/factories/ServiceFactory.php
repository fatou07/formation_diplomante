<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'adresse' => $faker->word,
        'telephone' => $faker->randomFloat(),
    ];
});
