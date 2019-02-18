<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\GroupResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGroupController extends Controller
{
    public function index(User $user)
    {
        return GroupResource::collection($user->managedGroups);
    }
}
