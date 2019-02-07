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
     * @bodyParam ratio float 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする
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

        return new AttributeResource($request->user()->managedAttributes()->create($request->all()));
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
     * @bodyParam ratio float 割合。加減算と割合はどちらかのみの設定にしたほうがいいような気がする
     *
     * @responseFile 200 responses/attributes.update.200.json
     */
    public function update(Request $request, Attribute $attribute)
    {
        $attribute->update($request->all());
        // 更新後のものを返す
        return new AttributeResource(Attribute::find($attribute->id));
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
        $request->user()->friends()->wherePivot('attribute_id', $attribute->id)->get()->each(function ($f) {
            $f->pivot->attribute_id = null;
            $f->pivot->save();
        });
        $attribute->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
