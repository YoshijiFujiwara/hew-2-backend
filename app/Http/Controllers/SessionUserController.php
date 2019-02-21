<?php

namespace App\Http\Controllers;

use App\Http\Resources\SessionUserResource;
use App\Http\Resources\UserResource;
use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group sessions.users セッションのユーザー管理
 */
class SessionUserController extends Controller
{
    /**
     * sessions.users.index あるセッションのユーザー一覧
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.users.index.200.json
     */
    public function index(Request $request, Session $session)
    {
        return UserResource::collection($session->users);
    }

    /**
     * sessions.users.store セッションにユーザーを追加する
     * @queryParam session required セッションid
     * @bodyParam user_id string required 追加するユーザーのID
     * @bodyParam join_status required integer 参加状況のステータス
     * @bodyParam paid integer  支払いしたか
     * @bodyParam plus_minus integer 加減算
     * @bodyParam ratio datetime  割合（加減算と重複しないほうが良いでしょう）
     *
     * @responseFile 200 responses/sessions.users.store.200.json
     */
    public function store(Request $request, Session $session)
    {
        // ルートパラメータにないので、ここに書くしかない
        $this->authorize('has', User::find($request->user_id));

        // すでにセッションにいる
        if (! empty($session->users->find($request->user_id))) {
            return response()->json(['error' => 'すでにそのグループに登録されています'], Response::HTTP_CONFLICT);
        }

        $session->users()->attach($request->user_id, [
            'join_status' => $request->join_status,
            'paid' => $request->paid,
            'plus_minus' => $request->plus_minus,
        ]);

        // ユーザー情報を更新するため、あえて再インスタンス化
        return UserResource::collection(Session::find($session->id)->users);
    }

    /**
     * sessions.users.show セッションの中の一人のユーザーの詳細を得る（属性とか見たりするでしょう）
     * @queryParam session required セッションid
     * @queryParam user required セッションに属するユーザーのid
     *
     * @responseFile 200 responses/sessions.users.show.200.json
     */
    public function show(Request $request, Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        return new UserResource($session->users->where('id', $user->id)->first());
    }


    /**
     * sessions.users.update セッションの中のユーザーのステータスなどを更新する
     * @queryParam session required セッションid
     * @queryParam user required セッションに属するユーザーのid
     * @bodyParam user_id string 追加するユーザーのID
     * @bodyParam join_status integer 参加状況のステータス
     * @bodyParam paid integer  支払いしたか
     * @bodyParam plus_minus integer 加減算
     * @bodyParam budget integer 支払い予定額
     * @bodyParam budget_actual integer 支払い確定金額
     *
     * @responseFile 200 responses/sessions.users.update.200.json
     */
    public function update(Request $request, Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $session->users()->updateExistingPivot($user->id, $request->all());

        return new UserResource($session->users->where('id', $user->id)->first());
    }

    /**
     * sessions.users.destory セッションからユーザーを削除する
     * @queryParam session required セッションid
     * @queryParam user required セッションに属するユーザーのid
     *
     * @responseFile 204 responses/sessions.users.destroy.204.json
     */
    public function destroy(Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $session->users()->where('id', $user->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
