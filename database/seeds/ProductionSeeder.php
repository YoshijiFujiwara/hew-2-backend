<?php

use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerEmail = 'hamada-manager@example.com';

        $managers = [
            [
                'username' => '幹事　浜田',
                'email' => $managerEmail,
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ]
        ];

        $users = [
            [
                'username' => '山本 京助',
                'email' => 'kyosuke-yamamoto@example.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ],
            [
                'username' => '原田 和也',
                'email' => 'kazuya-harada@example.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ],
            [
                'username' => '若松 桃子',
                'email' => 'momoko-wakamatsu@example.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ],
            [
                'username' => '坂本 太一',
                'email' => 'taichi-sakamoto@example.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ],
            [
                'username' => '伊藤 直子',
                'email' => 'naoko-itho@example.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'o34k30skm3h4b'
            ]
        ];

        foreach ($managers as $manager) {
            \App\User::create($manager);
        }
        foreach ($users as $user) {
            \App\User::create($user);
        }
        $managerUser = \App\User::where('email', $managerEmail)->first();

        $managerUser->managedAttributes()->createMany([
            [
                'name' => '上司',
                'plus_minus' => '1000'
            ],
            [
                'name' => '同僚',
                'plus_minus' => '0'
            ],
            [
                'name' => '女性',
                'plus_minus' => '-500'
            ],
        ]);

        for ($i = 1; $i <= 6; $i++) {
            $targetUser = \App\User::find($i);
            for ($j = 1; $j <= 6; $j++) {
                if ($i != $j) {
                    $targetUser->allFriends()->attach($j, [
                        'permitted' => true
                    ]);
                }
            }
        }
        // 属性IDをupdate
        $managerUser->allFriends()->updateExistingPivot(2, [
            'attribute_id' => 1
        ]);
        $managerUser->allFriends()->updateExistingPivot(3, [
            'attribute_id' => 2
        ]);
        $managerUser->allFriends()->updateExistingPivot(4, [
            'attribute_id' => 3
        ]);
        $managerUser->allFriends()->updateExistingPivot(5, [
            'attribute_id' => 1
        ]);
        $managerUser->allFriends()->updateExistingPivot(6, [
            'attribute_id' => 3
        ]);


        $managerUser->managedGroups()->create([
            'name' => 'いつもの'
        ]);

        $group = $managerUser->managedGroups()->first();
        $group->users()->attach([2, 3, 4, 5, 6]);

        $managerUser->managedSessions()->create([
            'name' => 'のみ1',
            'shop_id' => 'J000766202',
            'budget' => 20000,
            'actual' => null,
            'start_time' => new \Carbon\Carbon('2019-03-13 18:30:00'),
            'end_time' => new \Carbon\Carbon('2019-03-13 21:30:00'),
        ]);

        $session = \App\Model\Session::where('name', 'のみ1')->first();
        $session->users()->attach(2, [
            'join_status' => 'allow',
            'attribute_name' => '上司',
            'plus_minus' => 1000
        ]);
        $session->users()->attach(3, [
            'join_status' => 'allow',
            'attribute_name' => '同僚'
        ]);
        $session->users()->attach(4, [
            'join_status' => 'allow',
            'attribute_name' => '女性',
            'plus_minus' => -500
        ]);
        $session->users()->attach(5, [
            'join_status' => 'allow',
            'attribute_name' => '上司',
            'plus_minus' => 1000
        ]);
        $session->users()->attach(6, [
            'join_status' => 'allow',
            'attribute_name' => '女性',
            'plus_minus' => -500
        ]);


        // default_settingを作成
        $managerUser->managedDefaultSettings()->createMany([
            [
                'name' => 'いつもの飲み設定',
                'current_location_flag' => 1,
                'group_id' => 1,
                'timer' => '01:00:00'
            ],
        ]);
    }
}
