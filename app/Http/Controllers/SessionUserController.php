<?php

namespace App\Http\Controllers;

use App\Http\Resources\SessionUserResource;
use App\Http\Resources\UserResource;
use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionUserController extends Controller
{
    public function index(Request $request, Session $session)
    {
        return UserResource::collection($session->users);
    }

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
            'ratio' => $request->ratio,
        ]);

        // ユーザー情報を更新するため、あえて再インスタンス化
        return UserResource::collection(Session::find($session->id)->users);
    }

    public function show(Request $request, Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        return new UserResource($session->users->where('id', $user->id)->first());
    }


    public function update(Request $request, Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $session->users()->updateExistingPivot($user->id, [
            'join_status' => $request->join_status,
            'paid' => $request->paid,
            'plus_minus' => $request->plus_minus,
            'ratio' => $request->ratio,
        ]);

        return new UserResource($session->users->where('id', $user->id)->first());
    }

    public function destroy(Session $session, User $user)
    {
        // セッションの一員でない
        if (! $session->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $session->users()->detach($user);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
