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
     *
     * @response {
    "data": [
    {
    "id": 1,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "eius",
    "users": [
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
    ],
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
    "id": 2,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "tempore",
    "users": [
    {
    "id": 14,
    "name": "斉藤 太郎",
    "username": "asuka72",
    "email": "maaya86@example.org",
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
    "id": 25,
    "name": "原田 太一",
    "username": "murayama.taro",
    "email": "ryohei50@example.com",
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
    "id": 45,
    "name": "加納 拓真",
    "username": "kimura.takuma",
    "email": "taichi48@example.org",
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
    ],
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
    "id": 3,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "consequuntur",
    "users": [
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
    },
    {
    "id": 38,
    "name": "津田 幹",
    "username": "takahashi.kaori",
    "email": "puno@example.com",
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
    "id": 45,
    "name": "加納 拓真",
    "username": "kimura.takuma",
    "email": "taichi48@example.org",
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
    "id": 48,
    "name": "村山 知実",
    "username": "nanami15",
    "email": "ito.hanako@example.net",
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
    ],
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
    public function index(Request $request)
    {
        return GroupResource::collection($request->user()->managedGroups);
    }

    /**
     * グループを追加
     *
     * @bodyParam name string required 新規グループの名前
     * @response {
    "data": {
    "id": 151,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "あたらしい",
    "users": [],
    "created_at": {
    "date": "2019-01-13 12:01:30.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 12:01:30.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    }
     * @response 409 {
    "error": "同じ名前は使用できません"
    }
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
     * グループ詳細
     *
     * @queryParam group required グループid
     *
     * @response {
    "data": {
    "id": 1,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "eius",
    "users": [
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
    ],
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
     */
    public function show(Request $request, Group $group)
    {
        return new GroupResource($group);
    }

    /**
     * グループの情報を更新
     * @bodyParam name string required 新たにつけるグループ名
     * @queryParam group required グループid
     *
     * @response 409 {
    "error": "同じ名前は使用できません"
    }
     *
     * @response {
    "data": {
    "id": 1,
    "manager": {
    "id": 1,
    "name": "加藤 里佳",
    "username": "eaota",
    "email": "momoko48@example.net",
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
    "name": "eius",
    "users": [
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
    ],
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
     *
     * @queryParam group required グループid
     * @response 204 null
     */
    public function destroy(Request $request, Group $group)
    {
        $group->users()->detach();
        $group->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
