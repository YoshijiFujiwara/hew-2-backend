<?php

namespace App\Http\Controllers;

use App\Http\Requests\DefaultSettingStoreRequest;
use App\Http\Resources\DefaultSettingResource;
use App\Model\DefaultSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group default_settings デフォルト設定
 */
class DefaultSettingController extends Controller
{
    /**
     * default_settings.index デフォルト設定の一覧を取得する
     *
     * @responseFile 200 responses/default_settings.index.200.json
     */
    public function index(Request $request)
    {
        return DefaultSettingResource::collection($request->user()->managedDefaultSettings);
    }

    /**
     * default_settings.store 新規デフォルト設定を作成する
     *
     * @bodyParam name string required 設定名
     * @bodyParam timer integer required 始まるまでの時間'01:00:00'形式
     * @bodyParam group_id integer required この設定を適用するグループid
     *
     * @responseFile 201 responses/default_settings.store.201.json
     */
    public function store(DefaultSettingStoreRequest $request)
    {
        // 同じ名前はやめよう
//        if ($request->user()->managedDefaultSettings()->where('name', $request->name)->exists()) {
//            return response()->json(['error' => '同じ名前は使用できません'], Response::HTTP_CONFLICT);
//        }

        $response = new DefaultSettingResource($request->user()->managedDefaultSettings()->create($request->all()));
        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::DEFAULT_SETTING_CREATE_EVENT, [
            'message' => $response
        ]);

        return $response;
    }

    /**
     * default_settings.show 一つのデフォルト設定の詳細を得る
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
     * default_settings.update 一つのデフォルト設定情報のupdate
     *
     * @queryParam default_setting required 設定のid
     * @bodyParam name string required 設定名
     * @bodyParam timer integer required 始まるまでの時間'01:00:00'形式
     * @bodyParam group_id integer required この設定を適用するグループid
     *
     * @responseFile 200 responses/default_settings.update.200.json
     */
    public function update(DefaultSettingStoreRequest $request, DefaultSetting $defaultSetting)
    {
        $defaultSetting->update($request->all());
        // 更新後のものを返す

        $response = new DefaultSettingResource(DefaultSetting::find($defaultSetting->id));
        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::DEFAULT_SETTING_UPDATE_EVENT, [
            'message' => $response
        ]);

        return $response;
    }

    /**
     * default_settings.destroy 一つのデフォルト設定を削除する
     *
     * @queryParam default_setting required 設定のid
     *
     * @responseFile 204 responses/default_settings.destroy.204.json
     */
    public function destroy(Request $request, DefaultSetting $defaultSetting)
    {
        $defaultSetting->delete();

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::DEFAULT_SETTING_DELETE_EVENT, [
            'message' => new DefaultSettingResource($defaultSetting)
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
