<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoUserReload extends Command
{
    const ID_ARRAY = [5,6,7];

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
    }

    public function seeding()
    {
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
