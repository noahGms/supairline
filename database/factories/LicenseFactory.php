<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\License;
use Faker\Generator as Faker;

$factory->define(License::class, function (Faker $faker) {
    return [
        'numero' => 'LIC-' . random_int(1111, 9999),
        'validityDate' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '+10 years', null)
    ];
});
