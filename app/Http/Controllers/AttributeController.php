<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeResource;
use App\Model\Attribute;
use App\Model\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group attribute 属性
 */
class AttributeController extends Controller
{
    /**
     * attributes.index 自分が管理している属性一覧
     *
     * @responseFile 200 responses/attributes.index.200.json
     */
    public function index(Request $request)
    {
        return AttributeResource::collection($request->user()->managedAttributes);
    }

    /**
     * attributes.store 属性追加
     *
     * @bodyParam name string required 属性名。必須
     * @bodyParam plus_minus integer 加減算
     *
     * @responseFile 201 responses/attributes.store.201.json
     * @responseFile 409 responses/attributes.store.409.json
     */
    public function store(Request $request)
    {
        // 同じ属性名はやめよう
        if ($request->user()->managedAttributes()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        $response = new AttributeResource($request->user()->managedAttributes()->create($request->all()));

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::ATTRIBUTE_CREATE_EVENT, [
            'message' => $response
        ]);

        return $response;
    }

    /**
     * attributes.show 属性の一つの詳細を得る
     *
     * @queryParam attribute required 属性id
     *
     * @responseFile 200 responses/attributes.show.200.json
     */
    public function show(Request $request, Attribute $attribute)
    {
        return new AttributeResource($attribute);
    }

    /**
     * attributes.update 対象の属性をアップデート
     * @queryParam attribute required 属性id
     * @bodyParam name string required 属性名。必須
     * @bodyParam plus_minus integer 加減算
     *
     * @responseFile 200 responses/attributes.update.200.json
     */
    public function update(Request $request, Attribute $attribute)
    {
        $attribute->update($request->all());
        // 更新後のものを返す

        $response = new AttributeResource(Attribute::find($attribute->id));
        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::ATTRIBUTE_UPDATE_EVENT, [
            'message' => $response
        ]);

        return $response;
    }

    /**
     * attributes.destory 属性の削除
     *
     * @queryParam attribute required 属性id
     *
     * @responseFile 204 responses/attributes.destroy.204.json
     */
    public function destroy(Request $request, Attribute $attribute)
    {
        $attribute->delete();

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::ATTRIBUTE_DELETE_EVENT, [
            'message' => new AttributeResource($attribute)
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
