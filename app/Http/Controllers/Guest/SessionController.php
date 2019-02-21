<?php

namespace App\Http\Controllers\Guest;

use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * @group guest ゲスト
 */
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

    /**
     * guests.sessions.update セッション参加状況を更新する（join_statusのみ。allow, wait, denyの文字のみ。）
     * @bodyParam join_status string required 参加状況のステータス['allow', 'wait', 'deny']
     *
     * @responseFile 200 responses/guests.sessions.update.200.json
     */
    public function update(Request $request, Session $session)
    {
        if (! in_array($request->join_status, ['allow', 'wait', 'deny'])) {
            return response()->json(['error' => 'join_statusはallow, wait, denyのいずれかです'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $request->user()->participatedSessions()->where('id', $session->id)->updateExistingPivot($session->id, [
            'join_status' => $request->join_status
        ]);

        return new UserResource($session->users()->where('id', $request->user()->id)->first());
    }
}
