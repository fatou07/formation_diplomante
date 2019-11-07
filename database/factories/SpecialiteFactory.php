<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Specialite::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
       
    
    ];
});
