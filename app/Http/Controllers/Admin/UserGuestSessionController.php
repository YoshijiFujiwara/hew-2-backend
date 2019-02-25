<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SessionResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserGuestSessionController extends Controller
{
    /**
     * ゲスト参加しているセッション一覧
     */
    public function index(User $user)
    {
        return SessionResource::collection($user->participatedSessions);
    }
}
