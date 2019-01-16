<?php

namespace App\Policies;

use App\Model\Session;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SessionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // 対象のセッションを保存しているか
    public function has(User $manager, Session $session)
    {
        return $manager->hasTheSession($session);
    }

    // 対象のセッションに参加しているか
    public function participated(User $user, Session $session)
    {
        return $user->participatedTheSession($session);
    }
}
