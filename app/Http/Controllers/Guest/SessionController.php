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
     *
     * @responseFile 200 responses/guests.sessions.index.200.json
     */
    public function index(Request $request)
    {
        return SessionResource::collection($request->user()->participatedSessions);
    }

    /**
     * guests.sessions.show ゲストとして参加しているセッションの一つの詳細
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/guests.sessions.show.200.json
     */
    public function show(Request $request, Session $session)
    {
        return new SessionResource($session);
    }
}
