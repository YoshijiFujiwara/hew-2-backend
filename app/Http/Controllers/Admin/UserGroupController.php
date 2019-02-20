<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\GroupResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group admin 管理者ページ
 */
class UserGroupController extends Controller
{
    public function index(User $user)
    {
        return GroupResource::collection($user->managedGroups);
    }
}
