<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionStoreRequest;
use App\Http\Resources\SessionResource;
use App\Model\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * sessions.index 管理しているセッション一覧
     *
     * @response {
    "data": [
    {
    "id": 1,
    "name": "consequatur",
    "shop_id": 349,
    "budget": 23048,
    "actual": 11930,
    "start_time": "1982-08-26 06:36:15",
    "end_time": null,
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
    "users": [
    {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 1,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "name": "quas",
    "shop_id": 954,
    "budget": 19513,
    "actual": 23912,
    "start_time": "2008-03-11 01:08:35",
    "end_time": null,
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
    "users": [
    {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "join_status": "allow",
    "paid": 1,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 0,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "name": "et",
    "shop_id": 356,
    "budget": 25903,
    "actual": 37587,
    "start_time": "1995-11-21 01:28:07",
    "end_time": null,
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
    "users": [
    {
    "id": 17,
    "name": "野村 里佳",
    "username": "nomura.taichi",
    "email": "fhamada@example.com",
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 0,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 0,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 0,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 0,
    "plus_minus": null,
    "ratio": null,
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
    "id": 4,
    "name": "neque",
    "shop_id": 175,
    "budget": 5969,
    "actual": 10843,
    "start_time": "1981-11-12 22:24:47",
    "end_time": null,
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
    "users": [
    {
    "id": 15,
    "name": "杉山 太一",
    "username": "yosuke.yamamoto",
    "email": "dogaki@example.net",
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "allow",
    "paid": 1,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "deny",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
    "join_status": "wait",
    "paid": null,
    "plus_minus": null,
    "ratio": null,
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
        return SessionResource::collection($request->user()->managedSessions);
    }

    /**
     * sessions.store セッションを作成
     *
     * @bodyParam name string required 新規セッションの名前
     * @bodyParam shop_id integer  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     */
    public function store(SessionStoreRequest $request)
    {
        $newSession = $request->user()->managedSessions()->create($request->all());

        return new SessionResource($newSession);
    }

    /**
     * sessions.show 一つのセッションの詳細
     * @queryParam session required セッションid
     */
    public function show(Request $request, Session $session)
    {
        return new SessionResource($session);
    }


    /**
     * sessions.update セッション情報を更新
     * @bodyParam name string required 新規セッションの名前
     * @bodyParam shop_id integer  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     * @queryParam session required セッションid
     */
    public function update(Request $request, Session $session)
    {
        $session->update($request->all());
        return new SessionResource($session);
    }

    /**
     * sessions.destory セッションを削除
     * @queryParam session required セッションid
     */
    public function destroy(Session $session)
    {
        $session->users()->detach();
        $session->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
