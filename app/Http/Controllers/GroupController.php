<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupStoreRequest;
use App\Http\Resources\GroupResource;
use App\Model\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GroupController extends Controller
{
    /**
     * 自分が管理しているグループ一覧
     */
    public function index(Request $request)
    {
        return GroupResource::collection($request->user()->managedGroups);
    }

    /**
     * グループを追加
     */
    public function store(GroupStoreRequest $request)
    {
        // 同じグループ名はやめよう
        if ($request->user()->managedGroups()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        return new GroupResource($request->user()->managedGroups()->create($request->all()));
    }

    /**
     *  グループ詳細
     */
    public function show(Request $request, Group $group)
    {
        return new GroupResource($group);
    }

    /**
     * グループの情報を更新
     */
    public function update(Request $request, Group $group)
    {
        // 同じグループ名はやめよう
        if ($request->user()->managedGroups()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        $group->update($request->all());

        return new GroupResource($group);
    }

    /**
     * グループを削除
     */
    public function destroy(Request $request, Group $group)
    {
        $group->users()->detach();
        $group->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
