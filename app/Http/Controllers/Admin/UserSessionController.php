<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SessionResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group admin 管理者ページ
 */
class UserSessionController extends Controller
{
    public function index(User $user)
    {
        return SessionResource::collection($user->managedSessions);
    }
}
