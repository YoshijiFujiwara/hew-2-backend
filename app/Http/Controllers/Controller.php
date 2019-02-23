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

    public const USER_CREATE_EVENT = 'user_create';
    public const USER_UPDATE_EVENT = 'user_update';
    public const USER_DELETE_EVENT = 'user_delete';

    public const FRIEND_CREATE_EVENT = 'friend_create';
    public const FRIEND_UPDATE_EVENT = 'friend_update';
    public const FRIEND_DELETE_EVENT = 'friend_delete';

    public const DEVICE_TOKEN_CREATE_EVENT = 'device_token_create';
    public const DEVICE_TOKEN_UPDATE_EVENT = 'device_token_update';
    public const DEVICE_TOKEN_DELETE_EVENT = 'device_token_delete';

    public const SESSION_CREATE_EVENT = 'session_create';
    public const SESSION_UPDATE_EVENT = 'session_update';
    public const SESSION_DELETE_EVENT = 'session_delete';

    public const SESSION_USER_CREATE_EVENT = 'session_user_create';
    public const SESSION_USER_UPDATE_EVENT = 'session_user_update';
    public const SESSION_USER_DELETE_EVENT = 'session_user_delete';

    public const GROUP_CREATE_EVENT = 'group_create';
    public const GROUP_UPDATE_EVENT = 'group_update';
    public const GROUP_DELETE_EVENT = 'group_delete';

    public const GROUP_USER_CREATE_EVENT = 'group_user_create';
    public const GROUP_USER_UPDATE_EVENT = 'group_user_update';
    public const GROUP_USER_DELETE_EVENT = 'group_user_delete';

    public const ATTRIBUTE_CREATE_EVENT = 'attribute_create';
    public const ATTRIBUTE_UPDATE_EVENT = 'attribute_update';
    public const ATTRIBUTE_DELETE_EVENT = 'attribute_delete';

    public const DEFAULT_SETTING_CREATE_EVENT = 'default_setting_create';
    public const DEFAULT_SETTING_UPDATE_EVENT = 'default_setting_update';
    public const DEFAULT_SETTING_DELETE_EVENT = 'default_setting_delete';
}
