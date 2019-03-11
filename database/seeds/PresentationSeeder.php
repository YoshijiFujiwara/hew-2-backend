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
                'username' => '松坂 一穂',
                'email' => 'matsu@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 2
                'username' => '山田 忠明',
                'email' => 'yamada@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 3
                'username' => '田中 信也',
                'email' => 'tanaka@hew.com',
                'unique_id_search_flag' => true,
                'username_search_flag' => true,
                'password' => 'hoisulu',
                'email_verified_at' => now()
            ],
            [   // id 4
                'username' => '藤原 吉司',
                'email' => 'fuji@hew.com',
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
    }
}
