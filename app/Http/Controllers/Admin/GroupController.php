<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\GroupResource;
use App\Model\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class GroupController extends Controller
{
    public function index()
    {
        return GroupResource::collection(Group::all());
    }

    public function show(Group $group)
    {
        return new GroupResource($group);
    }

    public function destroy(Group $group)
    {
        // このグループを使っているデフォルト設定があった場合エラーを返す(important!!!)
        if ($group->defaultSettings()->exists()) {
            return response()->json(['error' => 'このグループを使用しているデフォルト設定があるので、削除できません'], Response::HTTP_CONFLICT);
        }

        $group->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
