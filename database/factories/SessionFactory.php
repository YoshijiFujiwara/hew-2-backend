<?php

use Faker\Generator as Faker;


$factory->define(\App\Model\Session::class, function (Faker $faker) {
    // ホットペッパーAPIから取得した、実店舗ID集
    $shopIds = ['J001006387', 'J000766202', 'J001125885', 'J001182216', 'J000109445', 'J001178400', 'J001177654', 'J000449898', 'J000753015', 'J000742418'];

    $startTime = null;
    $endTime = null;
    $randomNumber = rand(0,20);

    if ($randomNumber > 15) {
        $startTime = \Carbon\Carbon::now()->addDay(-5);
        $endTime = null;
    } else if ($randomNumber > 11) {
        $startTime = \Carbon\Carbon::now()->addDay(5);
        $endTime = \Carbon\Carbon::now()->addDay(10);
    } else if ($randomNumber > 7) {
        $startTime = \Carbon\Carbon::now()->addDay(-5);
        $endTime = \Carbon\Carbon::now()->addDay(10);
    } else if ($randomNumber > 3) {
        $startTime = \Carbon\Carbon::now()->addDay(-10);
        $endTime = \Carbon\Carbon::now()->addDay(-5);
    }

    return [
        'name' => $faker->word,
        'shop_id' => \Illuminate\Support\Arr::random($shopIds),
        'budget' => $faker->numberBetween(1000, 30000),
        'actual' => $faker->numberBetween(1000, 50000),
        'start_time' => $startTime,
        'end_time' => $endTime
    ];
});
