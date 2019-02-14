<?php

use Faker\Generator as Faker;

$factory->define(App\Destination::class, function (Faker $faker) {
    return [
        'destination' => $faker->country,
        'voyage_id' => $faker->numberBetween(1, 20)
    ];
});
