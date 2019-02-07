<?php

namespace App\Policies;

use App\Model\Attribute;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AttributePolicy
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

    public function has(User $user, Attribute $attribute)
    {
        return $user->hasTheAttribute($attribute);
    }
}
