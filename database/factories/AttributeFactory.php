<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Attribute::class, function (Faker $faker) {

    $attributes = ['上司', '先輩', '後輩', '同僚', '部長', '同級生', '部下', '親', '親戚', '幼馴染', 'VIP', '先生', '特別', '女性'];

    return [
        'name' => $attributes[array_rand($attributes)],
        'plus_minus' => $faker->numberBetween(-3000, 10000),
    ];
});
