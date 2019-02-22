<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFriendController extends Controller
{
    public function index(User $user)
    {
        return UserResource::collection($user->friends);
    }
}
