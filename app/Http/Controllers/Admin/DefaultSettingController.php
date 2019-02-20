<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\DefaultSettingResource;
use App\Model\DefaultSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class DefaultSettingController extends Controller
{
    public function index()
    {
        return DefaultSettingResource::collection(DefaultSetting::all());
    }

    public function show(DefaultSetting $defaultSetting)
    {
        return new DefaultSettingResource($defaultSetting);
    }

    public function destroy(DefaultSetting $defaultSetting)
    {
        $defaultSetting->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
