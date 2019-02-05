<?php

namespace App\Http\Controllers\Guest;

use App\Http\Resources\SessionResource;
use App\Model\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    /**
     * guests.sessions.index ゲストとして参加しているセッション一覧
     */
    public function index(Request $request)
    {
        return SessionResource::collection($request->user()->participatedSessions);
    }

    /**
     * guests.sessions.show ゲストとして参加しているセッションの一つの詳細
     * @queryParam session required セッションid
     */
    public function show(Request $request, Session $session)
    {
        return new SessionResource($session);
    }
}
