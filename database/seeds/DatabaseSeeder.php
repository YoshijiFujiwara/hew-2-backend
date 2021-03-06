<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    const ATTRIBUTE_ARRAY = [
        '上司', '先輩', '後輩', '同僚', '部長', '同級生', '部下', '親', '親戚', '幼馴染', 'VIP', '先生', '特別', '女性'
    ];

    const DEMO_MAX_ID = 25;

    const DS_PREFIX_ARRAY = ['いつもの', 'たまに', '重要な', 'まれな', '大事な', 'スペシャル', '普通の', '学校の', '職場の', 'バイト先の', '大切な', '愉快な'];
    const DS_NAMES = ['設定', 'テンプレ'];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PresentationSeeder::class,
            DemoUserSeeder::class
        ]);

        /**
         * todo　本番時はコメントアウトを外す
         */

        // 適当にユーザーを作って
        factory(\App\User::class, 300)->create();

        \App\User::where('id', '>', self::DEMO_MAX_ID)->each(function ($u) {
            $u->managedAttributes()->saveMany(factory(\App\Model\Attribute::class, 3)->make());
        });
        // 作ったユーザー一人ひとりに対してフレンドやグループ、セッションをランダムに追加していく
        \App\User::where('id', '>', self::DEMO_MAX_ID)->each(function ($u) {


        foreach (\App\User::where('id', '<>', $u->id)->where('id', '>', self::DEMO_MAX_ID)->get()->random(20) as $friend) {
            if ($u->id > $friend->id) {
                continue;
            }
            $permitted = 2;
            $random = rand(1, 15);
            if ($random > 7) {
                $permitted = 0;
            } else if ($random > 4) {
                $permitted = 1;
            }
            if ($permitted == 0) {
                // 友達
                $u->friends()->attach($friend, [
                    'attribute_id' => $u->managedAttributes->random()->id,
                    'permitted' => true
                ]);
                $friend->friends()->attach($u, [
                    'attribute_id' => $friend->managedAttributes->random()->id,
                    'permitted' => true
                ]);
            } else if ($permitted == 1) {
                // こちらから申請した
                $u->friends()->attach($friend, [
                    'attribute_id' => $u->managedAttributes->random()->id,
                    'permitted' => null
                ]);
            } else if ($permitted == 2) {
                // 向こうから申請が来た
                $friend->friends()->attach($u, [
                    'attribute_id' => $friend->managedAttributes->random()->id,
                    'permitted' => null
                ]);
            }
        }

            $u->managedGroups()->saveMany(factory(\App\Model\Group::class, 1)->make())
                ->each(function ($g) {
                    // 全フレンドの25％を適当に登録
                    $g->users()->attach($g->manager->friends->random($g->manager->friends->count() / 4));
                });
            $u->managedSessions()->saveMany(factory(\App\Model\Session::class, 3)->make())
                ->each(function ($s) {
                    // 全フレンドの50%を適当に登録
                    foreach ($s->manager->friends->random($s->manager->friends->count() / 2) as $friend) {

                        switch (rand(1,10)) {
                            case 1:
                            case 2:
                            case 3:
                            case 4:
                            case 5:
                                $joinStatus = 'allow';
                                $paidStatus = (rand(0,10) > 5)? true : false;
                                break;
                            case 6:
                            case 7:
                            case 8:
                                $joinStatus = 'deny';
                                $paidStatus = false;
                                break;
                            case 9:
                            case 10:
                                $joinStatus = 'wait';
                                $paidStatus = false;
                                break;
                        }

                        $s->users()->attach($friend, [
                            'join_status' => $joinStatus,
                            'paid' => $paidStatus,
                            'plus_minus' => rand(-3000, 10000),
                            'attribute_name' => self::ATTRIBUTE_ARRAY[array_rand(self::ATTRIBUTE_ARRAY)]
                        ]);
                    }
                });


            if (rand(0, 10)) {
                $currentLocationFlag = true;
                $longitude = null;
                $latitude = null;
            } else {
                $currentLocationFlag = false;
                $longitude = 140.00898606;
                $latitude = 35.71727401;
            }

            $defaultSetting = new \App\Model\DefaultSetting;
            $defaultSetting->name = self::DS_PREFIX_ARRAY[array_rand(self::DS_PREFIX_ARRAY)] . self::DS_NAMES[array_rand(self::DS_NAMES)];
            $defaultSetting->current_location_flag = $currentLocationFlag;
            $defaultSetting->longitude = $longitude;
            $defaultSetting->latitude = $latitude;
            $defaultSetting->timer =  \Carbon\Carbon::createFromTime(0,1,0);
            $defaultSetting->group()->associate($u->managedGroups()->get()->random());
            $u->managedDefaultSettings()->save($defaultSetting);
        });


        // todo この辺が遅い??

        // id 7番を固定のユーザーとする
        $testUser = \App\User::find(self::DEMO_MAX_ID + 1);
        $testUser->email = 'testuser@example.com';
        $testUser->username = 'テスト太郎';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 48番を固定のユーザーとする
        $testUser = \App\User::find(self::DEMO_MAX_ID + 2);
        $testUser->email = 'testuser48@example.com';
        $testUser->username = 'テストユーザー２';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 49番を固定のユーザーとする
        $testUser = \App\User::find(self::DEMO_MAX_ID + 3);
        $testUser->email = 'testuser49@example.com';
        $testUser->username = 'テストユーザー２';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 50番を固定のユーザーとする
        $testUser = \App\User::find(self::DEMO_MAX_ID + 4);
        $testUser->email = 'testuser50@example.com';
        $testUser->username = 'テストユーザー３';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // orm のbootを無視したいから、仕方ない
        \Illuminate\Support\Facades\DB::table('users')->where('id', self::DEMO_MAX_ID + 1)->update(['unique_id' => 'TESTTEST']);
        // テストデータでは、検索はすべてありにするか
        \Illuminate\Support\Facades\DB::table('users')->update(['unique_id_search_flag' => true, 'username_search_flag' => true]);

        /**
         * todo　本番時はここまでのコメントアウトを外す
         */

        // 管理者画面用
        \App\User::create([
            'username' => '管理者',
            'email' => 'admin@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);











//        factory(\App\User::class, 30)
//            ->create()
//            ->each(function ($u) {
//
//            });

//        \App\Model\Manager::all()->each(function ($m) {
//            $m->users()->attach(\App\User::where('id', '<>', $m->user->id)->get()->random(10));
//            $m->groups()->saveMany(factory(\App\Model\Group::class, 5)->make());
//            $m->sessions()->saveMany(factory(\App\Model\Session::class, 7)->make());
//            $m->attributes()->saveMany(factory(\App\Model\Attribute::class, 5)->make());
//        });
//
//        \App\Model\Group::all()->each(function ($g) {
//            $g->users()->attach(\App\User::where('id', '<>', $g->manager->user->id)->get()->random(5));
//        });
//
//        \App\Model\Session::all()->each(function ($s) {
//            $s->users()->attach(\App\User::where('id', '<>', $s->manager->user->id)->get()->random(7));
//        });


    }
}
