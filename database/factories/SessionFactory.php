<?php

use Faker\Generator as Faker;


$factory->define(\App\Model\Session::class, function (Faker $faker) {
    // ホットペッパーAPIから取得した、実店舗ID集
    $shopIds = ['J000963240','J000694448','J001099992','J001052197','J001192122','J001052371','J001209609','J001194970','J001144867','J001161470','J001100873','J001029450','J000019139','J001145745','J001209608','J001168766','J000017824','J001146629','J000683552','J001193218','J001125900','J001028666','J001144706','J001134233','J000957569','J001050624','J001098881','J001187367','J001182578','J001169117','J001099094','J001184923','J000022634','J001102075','J000013617','J001050722','J001194110','J001051727','J001184911','J000012497','J000012664','J000018737','J001210696','J000021426','J000963343','J000015634','J000024865','J001143480','J001209444','J000014000','J000972899','J001029516','J001192120','J000109552','J000013239','J001041551','J001162244','J001119384','J001008846','J001208108','J000973146','J001147486','J001154362','J000677546','J000661338','J001145636','J001160271','J001194339','J001109082','J000016617','J001200872','J001195165','J001200923','J001210397','J001215827','J000767139','J001208231','J001207537','J000768880','J000999604','J001126883','J001101861','J000012610','J001000926','J000635929','J001037164','J000972131','J000718142','J001008890','J001215799','J001209594','J001208310','J000971894','J001211230','J001185938','J001050609','J001187690','J000019291','J000740482','J001134143'];

    $startTime = null;
    $endTime = null;
    $randomNumber = rand(0,20);

    $random = rand(5, 100);
    $randomHour = rand(-12, 12);
    if ($randomNumber > 15) {
        $startTime = \Carbon\Carbon::now()->addDay($random * (-1))->addHour($randomHour);
        $endTime = null;
    } else if ($randomNumber > 11) {
        $startTime = \Carbon\Carbon::now()->addDay($random)->addHour($randomHour);
        $endTime = \Carbon\Carbon::now()->addDay($random)->addHour($randomHour + 3);
    } else if ($randomNumber > 7) {
        $startTime = \Carbon\Carbon::now()->addHour(rand(-5, -1));
        $endTime = \Carbon\Carbon::now()->addHour(rand(1, 5));
    } else if ($randomNumber > 3) {
        $startTime = \Carbon\Carbon::now()->addDay($random * (-1))->addHour($randomHour);
        $endTime = \Carbon\Carbon::now()->addDay($random * (-1))->addHour($randomHour + 3);
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
