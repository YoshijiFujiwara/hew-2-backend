<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Attribute::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'plus_minus' => $faker->numberBetween(-3000, 3000),
    ];
});
