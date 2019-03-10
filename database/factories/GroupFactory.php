<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Group::class, function (Faker $faker) {

    $prefixArray = ['いつもの', 'たまに', '重要な', 'まれな', '大事な', 'スペシャル', '普通の', '学校の', '職場の', 'バイト先の', '大切な', '愉快な'];
    $groupNames = ['グループ', 'メンツ', '友達'];

    return [
        'name' => $prefixArray[array_rand($prefixArray)] . $groupNames[array_rand($groupNames)] . rand(1,10)
    ];
});
