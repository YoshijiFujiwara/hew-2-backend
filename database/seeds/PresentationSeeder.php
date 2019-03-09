<?php
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    const ID_ARRAY = [1, 2, 3, 4];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // プレゼン用データ
        $users = [
            [   // id 1
                'username' => '浜田　太郎',
                'email' => 'hamada@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 2
                'username' => '山田　忠明',
                'email' => 'yamada@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 3
                'username' => '田中　信也',
                'email' => 'tanaka@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 4
                'username' => '山本　京介',
                'email' => 'yamamoto@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }

        /**
         * todo これ以降は、PresentationUserReload.phpと完全一致すること
         */

        (new \App\Console\Commands\PresentationUserReload())->seeding();

//        \App\User::whereIn('id', self::ID_ARRAY)->get()->each(function (\App\User $user) {
//            $user->managedAttributes()->createMany([
//                [   // id 1
//                    'name' => '先生',
//                    'plus_minus' => '5000'
//                ],
//                [
//                    'name' => '同僚',
//                    'plus_minus' => '0'
//                ],
//                [
//                    'name' => '同級生',
//                    'plus_minus' => '0'
//                ],
//                [
//                    'name' => '女性',
//                    'plus_minus' => '-500'
//                ],
//                [
//                    'name' => '学生',
//                    'plus_minus' => '-1000'
//                ],
//            ]);
//
//            \App\User::whereIn('id', self::ID_ARRAY)->where('id', '<>', $user->id)->get()->each(function (\App\User $friend) use ($user) {
//                $user->allFriends()->attach($friend->id, [
//                    'permitted' => true
//                ]);
//            });
//
//            $user->managedGroups()->create([
//                'name' => 'いつもの'
//            ]);
//
//            $group = new \App\Model\Group;
//            $group->manager()->associate($user);
//            $group->name = 'いつもの';
//            $group->save();
//            // 自分以外をグループに登録
//            $group->users()->attach(array_diff(self::ID_ARRAY, [$user->id]));
//
//            // default_settingを作成
//            $user->managedDefaultSettings()->createMany([
//                [
//                    'name' => 'いつもの設定',
//                    'current_location_flag' => 1,
//                    'group_id' => $user->managedGroups()->first()->id,
//                    'timer' => '00:01:00'
//                ],
//            ]);
//
//            // それぞれから見た属性割当
//            switch ($user->id) {
//                case 1:
//                    $user->allFriends()->updateExistingPivot(2, [
//                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(3, [
//                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(4, [
//                        'attribute_id' => $user->managedAttributes->where('name', '同級生')->first()->id
//                    ]);
//
//                    $user->managedSessions()->create([
//                        'name' => '飲み会',
//                        'shop_id' => 'J000766202',
//                        'budget' => 20000,
//                        'actual' => null,
//                        'start_time' => new \Carbon\Carbon('2019-03-13 18:30:00'),
//                        'end_time' => new \Carbon\Carbon('2019-03-13 21:30:00'),
//                    ]);
//
//                    $session = \App\Model\Session::where('name', '飲み会')->first();
//                    $session->users()->attach(2, [
//                        'join_status' => 'allow',
//                        'attribute_name' => '先生',
//                        'plus_minus' => 5000
//                    ]);
//                    $session->users()->attach(3, [
//                        'join_status' => 'allow',
//                        'attribute_name' => '先生',
//                        'plus_minus' => 5000
//                    ]);
//                    $session->users()->attach(4, [
//                        'join_status' => 'allow',
//                        'attribute_name' => '同級生',
//                        'plus_minus' => 0
//                    ]);
//
//                    break;
//                case 2:
//                    $user->allFriends()->updateExistingPivot(1, [
//                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(3, [
//                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(4, [
//                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
//                    ]);
//
//                    break;
//                case 3:
//                    $user->allFriends()->updateExistingPivot(1, [
//                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(2, [
//                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(4, [
//                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
//                    ]);
//
//                    break;
//                case 4:
//                    $user->allFriends()->updateExistingPivot(1, [
//                        'attribute_id' => $user->managedAttributes->where('name', '同級生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(2, [
//                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
//                    ]);
//                    $user->allFriends()->updateExistingPivot(3, [
//                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
//                    ]);
//
//                    break;
//            }
//        });
    }
}
