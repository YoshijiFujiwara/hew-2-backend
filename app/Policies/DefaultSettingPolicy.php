<?php

namespace App\Policies;

use App\Model\DefaultSetting;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DefaultSettingPolicy
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

    public function has(User $user, DefaultSetting $defaultSetting)
    {
        return $user->hasTheDefaultSetting($defaultSetting);
    }
}
