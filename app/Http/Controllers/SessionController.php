<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionStoreRequest;
use App\Http\Resources\SessionResource;
use App\Model\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * 管理しているセッション一覧
     */
    public function index(Request $request)
    {
        return SessionResource::collection($request->user()->managedSessions);
    }

    public function store(SessionStoreRequest $request)
    {
        $newSession = $request->user()->managedSessions()->create($request->all());

        return new SessionResource($newSession);
    }

    public function show(Request $request, Session $session)
    {
        $this->authorize('has', $session);
        return new SessionResource($session);
    }


    public function update(Request $request, Session $session)
    {
        $this->authorize('has', $session);
        $session->update($request->all());
        return new SessionResource($session);
    }

    public function destroy(Session $session)
    {
        $this->authorize('has', $session);
        $session->users()->detach();
        $session->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
