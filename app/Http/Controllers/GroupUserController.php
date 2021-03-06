<?php

namespace App\Http\Controllers;

use App\Http\Resources\GroupResource;
use App\Http\Resources\UserResource;
use App\Model\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group groups.users グループのユーザー管理
 */
class GroupUserController extends Controller
{
    /**
     * groups.users.index あるグループのユーザー一覧
     *
     * @queryParam group required グループid
     *
     * @responseFile 200 responses/groups.users.index.200.json
     */
    public function index(Request $request, Group $group)
    {
        return UserResource::collection($group->users);
    }

    /**
     * groups.users.store グループにユーザーを追加する
     * @queryParam group required グループid
     * @bodyParam user_id integer required 追加するユーザーのID
     * @responseFile 200 responses/groups.users.store.200.json
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

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::GROUP_UPDATE_EVENT, [
            'message' => [
                'manager_id' => $group->manager->id,
                'group_id' => $group->id
            ]
        ]);

        return UserResource::collection(Group::find($group->id)->users);
    }

    /**
     * groups.users.show あるグループの中のひとりのユーザー情報を得る
     * @queryParam group required グループid
     * @queryParam user required グループに所属する一人のユーザーのid
     *
     * @responseFile 200 responses/groups.users.show.200.json
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
     * groups.users.destory ユーザーをグループから削除
     * @queryParam group required グループid
     * @queryParam user required グループに所属する一人のユーザーのid
     * 
     * @responseFile 204 responses/groups.users.destroy.204.json
     */
    public function destroy(Request $request, Group $group, User $user)
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
        Pusher::trigger(self::ADMIN_CHANNEL, self::GROUP_UPDATE_EVENT, [
            'message' => [
                'manager_id' => $group->manager->id,
                'group_id' => $group->id
            ]
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
