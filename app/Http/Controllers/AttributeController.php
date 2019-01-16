<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeResource;
use App\Model\Attribute;
use App\Model\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AttributeController extends Controller
{
    /**
     * 自分が管理している属性一覧
     *
     * @response {
    "data": [
    {
    "id": 1,
    "manager": {
    "id": 1,
    "name": "佐々木 和也",
    "username": "haoyama",
    "email": "esuzuki@example.net",
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    "name": "possimus",
    "plus_minus": -1683,
    "ratio": 2,
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 2,
    "manager": {
    "id": 1,
    "name": "佐々木 和也",
    "username": "haoyama",
    "email": "esuzuki@example.net",
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    "name": "corrupti",
    "plus_minus": 1060,
    "ratio": 2,
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 3,
    "manager": {
    "id": 1,
    "name": "佐々木 和也",
    "username": "haoyama",
    "email": "esuzuki@example.net",
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    "name": "voluptates",
    "plus_minus": -1596,
    "ratio": 1,
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 4,
    "manager": {
    "id": 1,
    "name": "佐々木 和也",
    "username": "haoyama",
    "email": "esuzuki@example.net",
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    "name": "cupiditate",
    "plus_minus": -170,
    "ratio": 2,
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 5,
    "manager": {
    "id": 1,
    "name": "佐々木 和也",
    "username": "haoyama",
    "email": "esuzuki@example.net",
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    "name": "vitae",
    "plus_minus": 921,
    "ratio": 2,
    "created_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 05:43:21.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    ]
    }
     *
     */
    public function index(Request $request)
    {
        return AttributeResource::collection($request->user()->managedAttributes);
    }

    /**
     * 属性追加
     *
     * @bodyParam name string required 属性名。必須
     * @bodyParam plus_minus integer 加減算
     * @bodyParam ratio float 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする
     *
     * @response {
    "data": {
    "id": 252,
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
    "name": "ボス!",
    "plus_minus": -1000,
    "ratio": null,
    "created_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    }
     *
     * @response 409 {
    "error": "同じ名前は使用できません"
    }
     */
    public function store(Request $request)
    {
        // 同じ属性名はやめよう
        if ($request->user()->managedAttributes()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        return new AttributeResource($request->user()->managedAttributes()->create($request->all()));
    }

    /**
     * 属性の一つの詳細を得る
     *
     * @queryParam attribute required 属性id
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
    "name": "laboriosam",
    "plus_minus": -1630,
    "ratio": 1,
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
    "name": "dolor",
    "plus_minus": -2888,
    "ratio": 2,
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
    "name": "dignissimos",
    "plus_minus": 597,
    "ratio": 2,
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
    "name": "iste",
    "plus_minus": 1972,
    "ratio": 0,
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
    "id": 5,
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
    "name": "eligendi",
    "plus_minus": 303,
    "ratio": 2,
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
    "id": 251,
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
    "name": "ボス",
    "plus_minus": -1000,
    "ratio": null,
    "created_at": {
    "date": "2019-01-13 09:37:01.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:37:01.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    },
    {
    "id": 252,
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
    "name": "ボス!",
    "plus_minus": -1000,
    "ratio": null,
    "created_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    ]
    }
     */
    public function show(Request $request, Attribute $attribute)
    {
        return new AttributeResource($attribute);
    }

    /**
     * 対象の属性をアップデート
     * @queryParam attribute required 属性id
     * @bodyParam name string required 属性名。必須
     * @bodyParam plus_minus integer 加減算
     * @bodyParam ratio float 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする
     *
     * @response {
    "data": {
    "id": 252,
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
    "name": "ボス!",
    "plus_minus": -1000,
    "ratio": null,
    "created_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    },
    "updated_at": {
    "date": "2019-01-13 09:37:49.000000",
    "timezone_type": 3,
    "timezone": "UTC"
    }
    }
    }
     */
    public function update(Request $request, Attribute $attribute)
    {
        return new AttributeResource($attribute->update($request->all()));
    }

    /**
     * 属性の削除
     *
     * @queryParam attribute required 属性id
     *
     * @response 204 null
     */
    public function destroy(Request $request, Attribute $attribute)
    {
        $request->user()->managedAttributes()->delete($attribute);
        $request->user()->friends->where('attribute_id', $attribute->id)->update(['attribute_id' => null]);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
