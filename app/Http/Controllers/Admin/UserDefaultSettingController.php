<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\DefaultSettingResource;
use App\Model\DefaultSetting;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group admin 管理者ページ
 */
class UserDefaultSettingController extends Controller
{
    public function index(User $user)
    {
        return DefaultSettingResource::collection($user->managedDefaultSettings);
    }
}
