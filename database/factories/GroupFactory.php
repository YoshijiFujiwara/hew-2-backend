<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Group::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
