<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SessionResource;
use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class UserSessionController extends Controller
{
    public function index(User $user)
    {
        return SessionResource::collection($user->managedSessions);
    }

    public function destroy(User $user, Session $session)
    {
        $session->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
