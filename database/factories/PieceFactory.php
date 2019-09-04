<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Piece::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'formateurs_idformateurs' => function () {
            return factory(App\Formateur::class)->create()->idformateurs;
        },
    ];
});
