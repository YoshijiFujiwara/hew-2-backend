<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected const ADMIN_CHANNEL = 'admin_channel';

    protected const USER_CREATE_EVENT = 'user_create';
    protected const USER_UPDATE_EVENT = 'user_update';
    protected const USER_DELETE_EVENT = 'user_delete';

    protected const ATTRIBUTE_CREATE_EVENT = 'attribute_create';
    protected const ATTRIBUTE_UPDATE_EVENT = 'attribute_update';
    protected const ATTRIBUTE_DELETE_EVENT = 'attribute_delete';
}
