<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Formateur::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'date_naissance' => $faker->dateTime(),
        'lieu_naissance' => $faker->word,
        'cni' => $faker->randomFloat(),
        'services' => $faker->word,
        'diplomes' => $faker->word,
        'niveaux' => $faker->word,
        'matricule' => $faker->randomNumber(),
        'telephone' => $faker->randomFloat(),
        'services_idservices' => function () {
            return factory(App\Service::class)->create()->idservices;
        },
    ];
});
