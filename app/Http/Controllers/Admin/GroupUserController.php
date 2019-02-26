<?php

namespace App\Http\Controllers\Admin;

use App\Model\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GroupUserController extends Controller
{
    public function destroy(Group $group, User $user)
    {
        // グループの一員でない
        if (! $group->hasTheUser($user)) {
            return response()->json(['error' => 'そのユーザーはそのグループの一員ではありません'], Response::HTTP_NOT_FOUND);
        }

        $group->users()->where('id', $user->id)->get()->each(function (User $user) {
            $user->pivot->deleted_at = now();
            $user->pivot->save();
        });

        // リアルタイム通知
//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::GROUP_UPDATE_EVENT, [
//            'message' => [
//                'manager_id' => $group->manager->id,
//                'group_id' => $group->id
//            ]
//        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
