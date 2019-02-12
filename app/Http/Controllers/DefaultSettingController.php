<?php

namespace App\Http\Controllers;

use App\Http\Resources\DefaultSettingResource;
use App\Model\DefaultSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DefaultSettingController extends Controller
{
    /**
     * default_settings.index
     *
     * @responseFile 200 responses/default_settings.index.200.json
     */
    public function index(Request $request)
    {
        return DefaultSettingResource::collection($request->user()->managedDefaultSettings);
    }

    /**
     * default_settings.store
     *
     * @bodyParam name string required 設定名
     * @bodyParam timer integer required 始まるまでの時間'01:00:00'形式
     * @bodyParam group_id integer required この設定を適用するグループid
     *
     * @responseFile 201 responses/default_settings.store.201.json
     */
    public function store(Request $request)
    {
        // 同じ名前はやめよう
        if ($request->user()->managedDefaultSettings()->where('name', $request->name)->exists()) {
            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
        }

        return new DefaultSettingResource($request->user()->managedDefaultSettings()->create($request->all()));
    }

    /**
     * default_settings.show
     *
     * @queryParam default_setting required 設定のid
     *
     * @responseFile 200 responses/default_settings.show.200.json
     */
    public function show(Request $request, DefaultSetting $defaultSetting)
    {
        return new DefaultSettingResource($defaultSetting);
    }

    /**
     * default_settings.update
     *
     * @queryParam default_setting required 設定のid
     * @bodyParam name string required 設定名
     * @bodyParam timer integer required 始まるまでの時間'01:00:00'形式
     * @bodyParam group_id integer required この設定を適用するグループid
     *
     * @responseFile 200 responses/default_settings.update.200.json
     */
    public function update(Request $request, DefaultSetting $defaultSetting)
    {
        $defaultSetting->update($request->all());
        // 更新後のものを返す
        return new DefaultSettingResource(DefaultSetting::find($defaultSetting->id));
    }

    /**
     * default_settings.destroy
     *
     * @queryParam default_setting required 設定のid
     *
     * @responseFile 204 responses/default_settings.destroy.204.json
     */
    public function destroy(Request $request, DefaultSetting $defaultSetting)
    {
        $defaultSetting->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
