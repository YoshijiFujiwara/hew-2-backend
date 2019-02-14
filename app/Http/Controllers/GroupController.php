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
     * groups.index 自分が管理しているグループ一覧
     *
     * @responseFile 200 responses/groups.index.200.json
     */
    public function index(Request $request)
    {
        return GroupResource::collection($request->user()->managedGroups);
    }

    /**
     * groups.store グループを追加
     *
     * @bodyParam name string required 新規グループの名前
     *
     * @responseFile 201 responses/groups.store.201.json
     */
    public function store(GroupStoreRequest $request)
    {
        // 同じ名前を許可する
//        // 同じグループ名はやめよう
//        if ($request->user()->managedGroups()->where('name', $request->name)->exists()) {
//            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
//        }

        return new GroupResource($request->user()->managedGroups()->create($request->all()));
    }

    /**
     * groups.show グループ詳細
     *
     * @queryParam group required グループid
     *
     * @responseFile 200 responses/groups.show.200.json
     */
    public function show(Request $request, Group $group)
    {
        return new GroupResource($group);
    }

    /**
     * groups.update グループの情報を更新
     * @bodyParam name string required 新たにつけるグループ名
     * @queryParam group required グループid
     *
     * @responseFile 200 responses/groups.update.200.json
     */
    public function update(Request $request, Group $group)
    {
//        // 同じグループ名はやめよう
//        if ($request->user()->managedGroups()->where('name', $request->name)->exists()) {
//            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
//        }

        $group->update($request->all());

        return new GroupResource($group);
    }

    /**
     * groups.destory グループを削除
     *
     * @queryParam group required グループid
     *
     * @responseFile 204 responses/groups.destroy.204.json
     * @responseFile 409 responses/groups.destroy.409.json
     */
    public function destroy(Request $request, Group $group)
    {
        // このグループを使っているデフォルト設定があった場合エラーを返す
        if ($group->defaultSettings()->exists()) {
            return response()->json(['error' => 'このグループを使用しているデフォルト設定があるので、削除できません'], Response::HTTP_CONFLICT);
        }

        $group->users()->detach();
        $group->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
