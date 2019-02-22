<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public const ADMIN_CHANNEL = 'admin_channel';

    public const USER_UPDATE_EVENT = 'user_update';

    public const FRIEND_UPDATE_EVENT = 'friend_update';

    public const SESSION_UPDATE_EVENT = 'session_update';

    public const GROUP_UPDATE_EVENT = 'group_update';

    public const ATTRIBUTE_UPDATE_EVENT = 'attribute_update';

    public const DEFAULT_SETTING_UPDATE_EVENT = 'default_setting_update';
}
