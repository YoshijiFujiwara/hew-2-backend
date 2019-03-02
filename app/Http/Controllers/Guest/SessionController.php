<?php

namespace App\Http\Controllers\Guest;

use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\Jobs\PushNotification;
use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Pusher\Laravel\Facades\Pusher;

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
     * guests.sessions.wait ゲストとして招待されていて、まだ返事していないセション一覧
     *
     * @responseFile 200 responses/guests.sessions.wait.200.json
     */
    public function waitSessions(Request $request)
    {
        return SessionResource::collection($request->user()->waitSessions);
    }

    /**
     * guests.sessions.allow ゲストとして招待されていて、参加了承したセション一覧
     *
     * @responseFile 200 responses/guests.sessions.allow.200.json
     */
    public function allowSessions(Request $request)
    {
        return SessionResource::collection($request->user()->allowSessions);
    }

    /**
     * guests.sessions.deny ゲストとして招待されていて、参加拒否した一覧
     *
     * @responseFile 200 responses/guests.sessions.deny.200.json
     */
    public function denySessions(Request $request)
    {
        return SessionResource::collection($request->user()->denySessions);
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

//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::SESSION_UPDATE_EVENT, [
//            'message' => [
//                'manager_id' => $session->manager->id,
//                'session_id' => $session->id
//            ]
//        ]);

        $sendMessage = '';
        // push通知用メッセージの作成
        switch ($request->join_status) {
            case 'allow':
                $sendMessage = 'に参加しました';
                break;
            case 'wait':
                $sendMessage = 'への参加を保留にしました';
                break;
            case 'deny':
                $sendMessage = 'への参加を拒否しました';
                break;
        }

        // push通知
        $this->dispatch(new PushNotification(
            "{$request->user()->username}さんがセッション {$session->name}{$sendMessage}",
            $session->manager->deviceTokenArray()
        ));

        return new UserResource($session->users()->where('id', $request->user()->id)->first());
    }
}
