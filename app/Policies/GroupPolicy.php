<?php

namespace App\Policies;

use App\Model\Group;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupPolicy
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

    public function has(User $manager, Group $group)
    {
        return $manager->hasTheGroup($group);
    }
}
