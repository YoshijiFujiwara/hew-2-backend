<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionStoreRequest;
use App\Http\Resources\SessionResource;
use App\Model\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionController extends Controller
{
    /**
     * sessions.index 管理しているセッション一覧
     *
     * @responseFile 200 responses/sessions.index.200.json
     */
    public function index(Request $request)
    {
        return SessionResource::collection($request->user()->managedSessions);
    }

    /**
     * sessions.store セッションを作成
     *
     * @bodyParam name string required 新規セッションの名前
     * @bodyParam shop_id integer  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     *
     * @responseFile 201 responses/sessions.store.201.json
     */
    public function store(SessionStoreRequest $request)
    {
        $newSession = $request->user()->managedSessions()->create($request->all());

        return new SessionResource($newSession);
    }

    /**
     * sessions.show 一つのセッションの詳細
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.show.200.json
     */
    public function show(Request $request, Session $session)
    {
        return new SessionResource($session);
    }


    /**
     * sessions.update セッション情報を更新
     * @bodyParam name string required 新規セッションの名前
     * @bodyParam shop_id integer  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.update.200.json
     */
    public function update(Request $request, Session $session)
    {
        $session->update($request->all());
        return new SessionResource($session);
    }

    /**
     * sessions.destory セッションを削除
     * @queryParam session required セッションid
     *
     * @responseFile 204 responses/sessions.destroy.204.json
     */
    public function destroy(Session $session)
    {
//        $session->users()->detach();
        $session->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
