<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductionSeeder::class
        ]);

        // 適当にユーザーを作って
        factory(\App\User::class, 44)->create();

        // 作ったユーザー一人ひとりに対してフレンドやグループ、セッションをランダムに追加していく
        \App\User::whereNotIn('id', [1,2,3,4,5,6])->each(function ($u) {
            $u->managedAttributes()->saveMany(factory(\App\Model\Attribute::class, 5)->make());

            foreach (\App\User::where('id', '<>', $u->id)->whereNotIn('id', [1,2,3,4,5,6])->get()->random(25) as $friend) {
                $permitted = false;
                $random = rand(1, 15);
                if ($random > 7) {
                    $permitted = true;
                } elseif ($random > 2) {
                    $permitted = null;
                }
                $u->friends()->attach($friend, [
                    'attribute_id' => $u->managedAttributes->random()->id,
                    'permitted' => $permitted
                ]);
            }

            $u->managedGroups()->saveMany(factory(\App\Model\Group::class, 5)->make())
                ->each(function ($g) {
                    // 全フレンドの25％を適当に登録
                    $g->users()->attach($g->manager->friends->random($g->manager->friends->count() / 3));
                });
            $u->managedSessions()->saveMany(factory(\App\Model\Session::class, 4)->make())
                ->each(function ($s) {
                    // 全フレンドの50%を適当に登録
                    foreach ($s->manager->friends->random($s->manager->friends->count() / 2) as $friend) {

                        switch (rand(1,3)) {
                            case 1:
                                $joinStatus = 'allow';
                                $paidStatus = (rand(0,10) > 5)? true : false;
                                break;
                            case 2:
                                $joinStatus = 'deny';
                                $paidStatus = false;
                                break;
                            case 3:
                                $joinStatus = 'wait';
                                $paidStatus = false;
                                break;
                        }

                        $s->users()->attach($friend, [
                            'join_status' => $joinStatus,
                            'paid' => $paidStatus,
                            'plus_minus' => null,
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
            $defaultSetting->name = str_random(7);
            $defaultSetting->current_location_flag = $currentLocationFlag;
            $defaultSetting->longitude = $longitude;
            $defaultSetting->latitude = $latitude;
            $defaultSetting->timer =  \Carbon\Carbon::createFromTime(1,0,0);
            $defaultSetting->group()->associate($u->managedGroups()->get()->random());
            $u->managedDefaultSettings()->save($defaultSetting);
        });


        // todo この辺が遅い??

        // id 7番を固定のユーザーとする
        $testUser = \App\User::find(7);
        $testUser->email = 'testuser@example.com';
        $testUser->username = 'テスト太郎';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 48番を固定のユーザーとする
        $testUser = \App\User::find(48);
        $testUser->email = 'testuser48@example.com';
        $testUser->username = 'テストユーザー２';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 49番を固定のユーザーとする
        $testUser = \App\User::find(49);
        $testUser->email = 'testuser49@example.com';
        $testUser->username = 'テストユーザー２';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // id 50番を固定のユーザーとする
        $testUser = \App\User::find(50);
        $testUser->email = 'testuser50@example.com';
        $testUser->username = 'テストユーザー３';
        $testUser->unique_id_search_flag = true;
        $testUser->username_search_flag = true;
        $testUser->save();

        // orm のbootを無視したいから、仕方ない
        \Illuminate\Support\Facades\DB::table('users')->where('id', 1)->update(['unique_id' => 'TESTTEST']);
        // テストデータでは、検索はすべてありにするか
        \Illuminate\Support\Facades\DB::table('users')->update(['unique_id_search_flag' => true, 'username_search_flag' => true]);



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
