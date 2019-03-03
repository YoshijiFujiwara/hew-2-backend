<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\DefaultSettingResource;
use App\Model\DefaultSetting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class UserDefaultSettingController extends Controller
{
    public function index(User $user)
    {
        return DefaultSettingResource::collection($user->managedDefaultSettings);
    }

    public function destroy(User $user, DefaultSetting $defaultSetting)
    {
        $defaultSetting->delete();

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::DEFAULT_SETTING_DELETE_EVENT, [
            'message' => [
                'manager_id' => $defaultSetting->manager->id,
                'default_setting_id' => $defaultSetting->id
            ]
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
