<?php

use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    const ID_ARRAY = [5, 6, 7];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // デモ用データ
        $users = [
            [   // id 5
                'username' => '浜田　太郎(デモ)',
                'email' => 'demo5@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 6
                'username' => '山田　忠明(デモ)',
                'email' => 'demo6@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 7
                'username' => '田中　信也(デモ)',
                'email' => 'demo7@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
        \App\User::whereIn('id', self::ID_ARRAY)->get()->each(function (\App\User $user) {
            $user->managedAttributes()->createMany([
                [
                    'name' => '先生',
                    'plus_minus' => '5000'
                ],
                [
                    'name' => '同僚',
                    'plus_minus' => '0'
                ],
                [
                    'name' => '同級生',
                    'plus_minus' => '0'
                ],
                [
                    'name' => '女性',
                    'plus_minus' => '-500'
                ],
                [
                    'name' => '学生',
                    'plus_minus' => '-1000'
                ],
            ]);

            \App\User::whereIn('id', self::ID_ARRAY)->where('id', '<>', $user->id)->get()->each(function (\App\User $friend) use ($user) {
                $user->allFriends()->attach($friend->id, [
                    'permitted' => true
                ]);
            });

            $user->managedGroups()->create([
                'name' => 'いつもの'
            ]);

            $group = new \App\Model\Group;
            $group->manager()->associate($user);
            $group->name = 'いつもの';
            $group->save();
            // 自分以外をグループに登録
            $group->users()->attach(array_diff(self::ID_ARRAY, [$user->id]));

            // default_settingを作成
            $user->managedDefaultSettings()->createMany([
                [
                    'name' => 'いつもの設定',
                    'current_location_flag' => 1,
                    'group_id' => $user->managedGroups()->first()->id,
                    'timer' => '00:01:00'
                ],
            ]);

            // それぞれから見た属性割当
            switch ($user->id) {
                case 5:
                    $user->allFriends()->updateExistingPivot(6, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(7, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);

                    $user->managedSessions()->create([
                        'name' => '飲み会',
                        'shop_id' => 'J000766202',
                        'budget' => 20000,
                        'actual' => null,
                        'start_time' => new \Carbon\Carbon('2019-03-13 18:30:00'),
                        'end_time' => new \Carbon\Carbon('2019-03-13 21:30:00'),
                    ]);

                    $session = \App\Model\Session::where('name', '飲み会')->first();
                    $session->users()->attach(6, [
                        'join_status' => 'allow',
                        'attribute_name' => '先生',
                        'plus_minus' => 5000
                    ]);
                    $session->users()->attach(7, [
                        'join_status' => 'allow',
                        'attribute_name' => '先生',
                        'plus_minus' => 5000
                    ]);
                    break;
                case 6:
                    $user->allFriends()->updateExistingPivot(5, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(7, [
                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
                    ]);

                    break;
                case 7:
                    $user->allFriends()->updateExistingPivot(5, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(6, [
                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
                    ]);

                    break;
            }
        });
    }
}
