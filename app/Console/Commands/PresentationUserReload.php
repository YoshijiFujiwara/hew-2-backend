<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PresentationUserReload extends Command
{
    const ID_ARRAY = [1, 2, 3, 4];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reload:presentation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'プレゼンテーション用ユーザーのデータのみをリロードする';

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
        // user_idが1,2,3,4にまつわるユーザー自身以外のデータを削除する
        DB::table('user_friends')->whereIn('user_id', self::ID_ARRAY)->orWhereIn('friend_id', self::ID_ARRAY)->delete();
        DB::table('session_user')->whereIn('user_id', self::ID_ARRAY)->delete();
        DB::table('sessions')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('group_user')->whereIn('user_id', self::ID_ARRAY)->delete();
        DB::table('groups')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('default_settings')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('attributes')->whereIn('manager_id', self::ID_ARRAY)->delete();
        DB::table('android_device_tokens')->whereIn('user_id', self::ID_ARRAY)->delete();

        $this->seeding();

        User::find(1)->update([
            'username' => '松坂 一穂',
            'email' => 'matsu@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);
        User::find(2)->update([
            'username' => '山田　忠明',
            'email' => 'yamada@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);
        User::find(3)->update([
            'username' => '田中　信也',
            'email' => 'tanaka@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);
        User::find(4)->update([
            'username' => '藤原 吉司',
            'email' => 'fuji@hew.com',
            'unique_id_search_flag' => true,
            'username_search_flag' => true,
            'password' => 'hoisulu',
            'email_verified_at' => now()
        ]);
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
                case 1:
                    $user->allFriends()->updateExistingPivot(2, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(3, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(4, [
                        'attribute_id' => $user->managedAttributes->where('name', '同級生')->first()->id
                    ]);

                    $user->managedSessions()->create([
                        'name' => '飲み会',
                        'shop_id' => 'J000766202',
                        'budget' => 20000,
                        'actual' => null,
                        'start_time' => new \Carbon\Carbon('2019-03-13 18:30:00'),
                        'end_time' => new \Carbon\Carbon('2019-03-13 21:30:00'),
                    ]);

                    $session = $user->managedSessions->where('name', '飲み会')->first();
                    $session->users()->attach(2, [
                        'join_status' => 'allow',
                        'attribute_name' => '先生',
                        'plus_minus' => 5000
                    ]);
                    $session->users()->attach(3, [
                        'join_status' => 'allow',
                        'attribute_name' => '先生',
                        'plus_minus' => 5000
                    ]);
                    $session->users()->attach(4, [
                        'join_status' => 'allow',
                        'attribute_name' => '同級生',
                        'plus_minus' => 0
                    ]);

                    break;
                case 2:
                    $user->allFriends()->updateExistingPivot(1, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(3, [
                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(4, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);

                    break;
                case 3:
                    $user->allFriends()->updateExistingPivot(1, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(2, [
                        'attribute_id' => $user->managedAttributes->where('name', '同僚')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(4, [
                        'attribute_id' => $user->managedAttributes->where('name', '学生')->first()->id
                    ]);

                    break;
                case 4:
                    $user->allFriends()->updateExistingPivot(1, [
                        'attribute_id' => $user->managedAttributes->where('name', '同級生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(2, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);
                    $user->allFriends()->updateExistingPivot(3, [
                        'attribute_id' => $user->managedAttributes->where('name', '先生')->first()->id
                    ]);

                    break;
            }
        });
    }
}
