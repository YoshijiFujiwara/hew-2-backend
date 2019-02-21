<?php

use Faker\Generator as Faker;


$factory->define(\App\Model\Session::class, function (Faker $faker) {
    // ホットペッパーAPIから取得した、実店舗ID集
    $shopIds = ['J001006387', 'J000766202', 'J001125885', 'J001182216', 'J000109445', 'J001178400', 'J001177654', 'J000449898', 'J000753015', 'J000742418'];

    return [
        'name' => $faker->word,
        'shop_id' => \Illuminate\Support\Arr::random($shopIds),
        'budget' => $faker->numberBetween(1000, 30000),
        'actual' => $faker->numberBetween(1000, 50000),
        'start_time' => $faker->dateTime($max = 'now', $timezone = null),
        'end_time' => null,
    ];
});
