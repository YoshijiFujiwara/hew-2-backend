<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Session::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'shop_id' => $faker->numberBetween(100, 999),
        'budget' => $faker->numberBetween(1000, 30000),
        'actual' => $faker->numberBetween(1000, 50000),
        'start_time' => $faker->dateTime($max = 'now', $timezone = null),
        'end_time' => null,
    ];
});
