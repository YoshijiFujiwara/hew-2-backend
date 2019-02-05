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
     * groups.users.index あるグループのユーザー一覧
     *
     * @queryParam group required グループid
     *
     * @response {
    "data": [
    {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 19,
    "name": "松本 千代",
    "username": "haruka.murayama",
    "email": "mhamada@example.net",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 30,
    "name": "佐々木 さゆり",
    "username": "syamaguchi",
    "email": "yui.matsumoto@example.net",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 36,
    "name": "井上 和也",
    "username": "tsubasa67",
    "email": "mai.yamamoto@example.com",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    ]
    }
     */
    public function index(Request $request, Group $group)
    {
        return UserResource::collection($group->users);
    }

    /**
     * groups.users.store グループにユーザーを追加する
     * @queryParam group required グループid
     *
     * @response {
    "data": [
    {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 19,
    "name": "松本 千代",
    "username": "haruka.murayama",
    "email": "mhamada@example.net",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 30,
    "name": "佐々木 さゆり",
    "username": "syamaguchi",
    "email": "yui.matsumoto@example.net",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 36,
    "name": "井上 和也",
    "username": "tsubasa67",
    "email": "mai.yamamoto@example.com",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    ]
    }
     * @response 409 {
    "error": "すでにそのグループに登録されています"
    }
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
     * groups.users.show あるグループの中のひとりのユーザー情報を得る
     * @queryParam group required グループid
     * @queryParam user required グループに所属する一人のユーザーのid
     * @response {
    "data": {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "created_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:36:18.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    }
     * @response 409 {
    "error": "そのユーザーはそのグループの一員ではありません"
    }
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
     * @response 409 {
    "error": "そのユーザーはそのグループの一員ではありません"
    }
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
