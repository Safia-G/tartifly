<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
      'libelle' => $faker->name,
      'description' => $faker->sentence,
      'pays' => $faker->country,
      'ville' => $faker->city,
      'date_debut' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
      'date_fin' => $faker->dateTimeInInterval($startDate = '1 years', $interval = '+ 5 days', $timezone = null),
      'photo' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
      'cout' => $faker->numberBetween(1000, 9000),
      'disponibilite' => $faker->boolean,
    ];
});
