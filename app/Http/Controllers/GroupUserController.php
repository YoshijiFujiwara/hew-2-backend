<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Model\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GroupUserController extends Controller
{
    /**
     * あるグループのユーザー一覧
     */
    public function index(Request $request, Group $group)
    {
        return UserResource::collection($group->users);
    }

    /**
     * グループにユーザーを追加する
     */
    public function store(Request $request, Group $group)
    {
        // ルートパラメータにないので、ここに書くしかない
        $this->authorize('has', User::find($request->user_id));

        // すでにグループにいる
        if (! empty($group->users->find($request->user_id))) {
            return response()->json(['error' => 'すでにそのグループに登録されています'], Response::HTTP_CONFLICT);
        }

        $group->users()->attach($request->user_id);

        return UserResource::collection($group->users);
    }

    /**
     * あるグループの中のひとりのユーザー情報を得る
     */
    public function show(Request $request, Group $group, User $user)
    {
        // グループの一員でない
        if (! $group->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        return new UserResource($user);
    }

    /**
     * ユーザーをグループから削除
     */
    public function destroy(Request $request, Group $group, User $user)
    {
        // グループの一員でない
        if (! $group->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $group->users()->detach($user);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
