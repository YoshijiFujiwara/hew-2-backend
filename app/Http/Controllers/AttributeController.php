<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeResource;
use App\Model\Attribute;
use App\Model\Session;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * 自分が管理している属性一覧
     */
    public function index(Request $request)
    {
        return AttributeResource::collection($request->user()->managedAttributes);
    }

    /**
     * 属性追加
     */
    public function store(Request $request)
    {
        // 同じ属性名はやめよう
        if ($request->user()->managedAttributes()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        return new AttributeResource($request->user()->attributes()->create($request->all()));
    }

    /**
     * 属性の一つの詳細を得る
     * @param Request $request
     * @param Attribute $attribute
     * @return AttributeResource
     */
    public function show(Request $request, Attribute $attribute)
    {
        return new AttributeResource($attribute);
    }

    /**
     * 対象の属性をアップデート
     * @param Request $request
     * @param Attribute $attribute
     * @return AttributeResource
     */
    public function update(Request $request, Attribute $attribute)
    {
        return new AttributeResource($attribute->update($request->all()));
    }

    /**
     * 属性の削除
     * @param Request $request
     * @param Attribute $attribute
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy(Request $request, Attribute $attribute)
    {
        $request->user()->managedAttributes()->delete($attribute);
        $request->user()->friends->where('attribute_id', $attribute->id)->update(['attribute_id' => null]);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
