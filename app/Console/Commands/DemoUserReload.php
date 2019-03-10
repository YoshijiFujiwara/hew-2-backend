<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoUserReload extends Command
{
    const ID_ARRAY = [5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];

    const ATTRIBUTE_ARRAY = ['上司', '先輩', '後輩', '同僚', '部長', '同級生', '部下', '親', '親戚', '幼馴染', 'VIP', '先生', '特別', '女性'];

    const DS_PREFIX_ARRAY = ['いつもの', 'たまに', '重要な', 'まれな', '大事な', 'スペシャル', '普通の', '学校の', '職場の', 'バイト先の', '大切な', '愉快な'];
    const DS_NAMES = ['設定', 'テンプレ'];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reload:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // user_idが5,6,7にまつわるユーザー自身以外のデータを削除する
        DB::table('user_friends')->whereIn('user_id', self::ID_ARRAY)->orWhereIn('friend_id', self::ID_ARRAY)->delete();
        DB::table('session_user')->whereIn('user_id', self::ID_ARRAY)->delete();
        DB::table('sessions')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('group_user')->whereIn('user_id', self::ID_ARRAY)->delete();
        DB::table('groups')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('default_settings')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('attributes')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('android_device_tokens')->whereIn('user_id', self::ID_ARRAY)->delete();

       $this->seeding();

        User::find(5)->update([   // id 5
            'username' => '浜田　太郎(デモ)',
            'email' => 'demo5@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);

        User::find(6)->update([   // id 6
            'username' => '山田　忠明(デモ)',
            'email' => 'demo6@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);

        User::find(7)->update([   // id 7
            'username' => '田中　信也(デモ)',
            'email' => 'demo7@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);
    }

    public function seeding()
    {
        // 作ったユーザー一人ひとりに対してフレンドやグループ、セッションをランダムに追加していく
        \App\User::whereIn('id', self::ID_ARRAY)->each(function ($u) {
            $u->managedAttributes()->saveMany(factory(\App\Model\Attribute::class, 3)->make());

            foreach (\App\User::where('id', '<>', $u->id)->whereIn('id', self::ID_ARRAY)->get()->random(15) as $friend) {
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

            $u->managedGroups()->saveMany(factory(\App\Model\Group::class, 2)->make())
                ->each(function ($g) {
                    // 全フレンドの25％を適当に登録
                    $g->users()->attach($g->manager->friends->random($g->manager->friends->count() / 4));
                });
            $u->managedSessions()->saveMany(factory(\App\Model\Session::class, 10)->make())
                ->each(function ($s) {
                    // 全フレンドの50%を適当に登録
                    foreach ($s->manager->friends->random((int)$s->manager->friends->count() * 0.75) as $friend) {

                        switch (rand(1,10)) {
                            case 1:
                            case 2:
                            case 3:
                            case 4:
                            case 5:
                            case 6:
                            case 7:
                                $joinStatus = 'allow';
                                $paidStatus = (rand(0,10) > 5)? true : false;
                                break;
                            case 9:
                                $joinStatus = 'deny';
                                $paidStatus = false;
                                break;
                            case 8:
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

            // セッションを1個ソフトデリートする
            $endSession = $u->endSessions()->first();
            if (!empty($endSession)) {
                $endSession->delete();
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
    }
}
