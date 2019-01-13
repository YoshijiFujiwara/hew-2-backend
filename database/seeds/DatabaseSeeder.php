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
        // 適当にユーザーを作って
        factory(\App\User::class, 50)->create();

        // 作ったユーザー一人ひとりに対してフレンドやグループ、セッションをランダムに追加していく
        \App\User::all()->each(function ($u) {
            $u->managedAttributes()->saveMany(factory(\App\Model\Attribute::class, 5)->make());

            foreach (\App\User::where('id', '<>', $u->id)->get()->random(15) as $friend) {
                $u->friends()->attach($friend, ['attribute_id' => $u->managedAttributes->random()->id]);
            }

            $u->managedGroups()->saveMany(factory(\App\Model\Group::class, 3)->make())
                ->each(function ($g) {
                    $g->users()->attach($g->manager->friends->random(4));
                });
            $u->managedSessions()->saveMany(factory(\App\Model\Session::class, 4)->make())
                ->each(function ($s) {
                    foreach ($s->manager->friends->random(6) as $friend) {

                        switch (rand(1,3)) {
                            case 1:
                                $joinStatus = 'allow';
                                $paidStatus = (rand(0,10) > 5)? true : false;
                                break;
                            case 2:
                                $joinStatus = 'deny';
                                $paidStatus = null;
                                break;
                            case 3:
                                $joinStatus = 'wait';
                                $paidStatus = null;
                                break;
                        }

                        $s->users()->attach($friend, [
                            'join_status' => $joinStatus,
                            'paid' => $paidStatus,
                            'plus_minus' => null,
                            'ratio'=> null
                        ]);
                    }
                });
        });


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
