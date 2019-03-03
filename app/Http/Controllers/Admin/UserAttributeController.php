<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\AttributeResource;
use App\Model\Attribute;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @group admin 管理者ページ
 */
class UserAttributeController extends Controller
{
    public function index(User $user)
    {
        return AttributeResource::collection($user->managedAttributes);
    }

    public function destroy(User $user, Attribute $attribute)
    {
        $attribute->delete();

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::ATTRIBUTE_DELETE_EVENT, [
            'message' => [
                'attribute_id' => $attribute->id
            ]
        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
