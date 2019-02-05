<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendStoreRequest;
use App\Http\Resources\SessionResource;
use App\Http\Resources\UserResource;
use App\User;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FriendController extends Controller
{
    /**
     * friends.index 友達一覧
     *
     * @response {
    "data": [
    {
    "id": 14,
    "name": "斉藤 太郎",
    "username": "asuka72",
    "email": "maaya86@example.org",
    "attribute_id": 4,
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
    "id": 15,
    "name": "杉山 太一",
    "username": "yosuke.yamamoto",
    "email": "dogaki@example.net",
    "attribute_id": 3,
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
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "attribute_id": 2,
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
    "attribute_id": 2,
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
    "id": 23,
    "name": "井上 洋介",
    "username": "yuki.ogaki",
    "email": "yuta.yamaguchi@example.org",
    "attribute_id": 3,
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
    "attribute_id": 3,
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
    "id": 26,
    "name": "渚 花子",
    "username": "ssasaki",
    "email": "wakamatsu.yoko@example.com",
    "attribute_id": 4,
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
    "attribute_id": 4,
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
    "id": 31,
    "name": "宇野 加奈",
    "username": "kimura.hiroshi",
    "email": "kimura.maaya@example.net",
    "attribute_id": 4,
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
    "attribute_id": 1,
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
    "id": 37,
    "name": "青田 充",
    "username": "ito.kana",
    "email": "akira02@example.org",
    "attribute_id": 1,
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
    "attribute_id": 1,
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
    "attribute_id": 2,
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
    "attribute_id": 5,
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
    "id": 49,
    "name": "井高 さゆり",
    "username": "maaya29",
    "email": "yamagishi.yosuke@example.net",
    "attribute_id": 5,
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
        return UserResource::collection($request->user()->friends);
    }

    /**
     * friends.store 友達申請する
     *
     * @bodyParam email string required 追加する友達のメールアドレス
     *
     * @response {
    "data": {
    "id": 2,
    "name": "大垣 美加子",
    "username": "cyamada",
    "email": "taro.kato@example.net",
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
     *
     * @response 409 {
    "error": "すでにフレンドです"
    }
     */
    public function store(FriendStoreRequest $request)
    {
        // すでに友達の場合、２重登録しないようにする
        if (! empty($request->user()->allFriends->where('email', $request->email)->first())) {
            return response()->json(['error' => 'すでにフレンドか、申請中です'], Response::HTTP_CONFLICT);
        }

        // 自分か
        if ($request->user()->id == User::where('email', $request->email)->first()->id) {
            return response()->json(['error' => '自分です'], Response::HTTP_CONFLICT);
        }

        $newFriend = User::where('email', $request->email)->first();
        $request->user()->friends()->attach($newFriend, ['permitted' => null]);

        return new UserResource($request->user()->waitingFriends->where('id', $newFriend->id)->first());
    }

    /**
     * friends.show 特定の友達の詳細情報
     *
     * @queryParam friend required 友達のid
     *
     * @response {
    "data": {
    "id": 2,
    "name": "大垣 美加子",
    "username": "cyamada",
    "email": "taro.kato@example.net",
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
    public function show(Request $request, User $friend)
    {
        return new UserResource($friend);
    }

    /**
     * friends.destory 友達から削除
     *
     * @queryParam friend required 友達のid
     *
     * @response 204 null
     */
    public function destroy(Request $request, User $friend)
    {
        $request->user()->friends()->detach($friend);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * friends.blockedUsers 申請した中でブロックされているユーザー一覧
     */
    public function blockedUsers(Request $request)
    {
        return UserResource::collection($request->user()->blockedFriends);
    }

    /**
     * friends.waitingFriends 申請した中で待っているユーザー一覧
     */
    public function waitingFriends(Request $request)
    {
        return UserResource::collection($request->user()->waitingFriends);
    }

    /**
     * friends.permit 友達申請を許可
     * @bodyParam user_id integer required 友達申請してきてる人のユーザーID
     */
    public function permit(Request $request)
    {
        // 申請されているか
        if (! $request->user()->invitingUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }

        $request->user()->invitingUsers()->updateExistingPivot($request->user()->id, [
            'permitted' => true
        ]);

        return response(null, 201);
    }

    /**
     * friends.reject 友達申請を拒否
     * @bodyParam user_id integer required 友達申請してきてる人のユーザーID
     */
    public function reject(Request $request)
    {
        // 申請されているか
        if (! $request->user()->invitingUsers()->where('id', $request->user_id)->exists()) {
            return response()->json(['error' => 'そのユーザーからは招待されていません'], Response::HTTP_CONFLICT);
        }

        $request->user()->invitingUsers()->updateExistingPivot($request->user()->id, [
            'permitted' => false
        ]);

        return response(null, 201);
    }

    /**
     * friends.friendRequestUsers 申請してきてるユーザー
     */
    public function friendRequestUsers(Request $request)
    {
        return UserResource::collection($request->user()->invitingUsers);
    }
}
