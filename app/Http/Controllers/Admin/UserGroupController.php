<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\GroupResource;
use App\Model\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class UserGroupController extends Controller
{
    public function index(User $user)
    {
        return GroupResource::collection($user->managedGroups);
    }

    public function destroy(User $user, Group $group)
    {
        // このグループを使っているデフォルト設定があった場合エラーを返す(important!!!)
        if ($group->defaultSettings()->exists()) {
            return response()->json(['error' => 'このグループを使用しているデフォルト設定があるので、削除できません'], Response::HTTP_CONFLICT);
        }

        $group->delete();

//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::GROUP_DELETE_EVENT, [
//            'message' => [
//                'group_id' => $group->id
//            ]
//        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
