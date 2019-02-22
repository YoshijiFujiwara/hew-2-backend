<?php

namespace App\Http\Controllers;

use App\Http\Requests\AndroidDeviceTokenStoreRequest;
use App\Http\Resources\AndroidDeviceTokenResource;
use App\Model\AndroidDeviceToken;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PushNotificationController extends Controller
{
    /**
     * push_notification.store_device_token android端末のデバイスIDを保存する
     * @bodyParam device_token string required 端末トークン（ID)
     *
     * @responseFile 201 responses/push_notification.store_device_token.201.json
     * @responseFile 208 responses/push_notification.store_device_token.208.json
     */
    public function storeDeviceToken(AndroidDeviceTokenStoreRequest $request)
    {
        if (! $request->user()->androidDeviceTokens()->where('device_token', $request->device_token)->exists()) {
            $androidDeviceToken = new AndroidDeviceToken();
            $androidDeviceToken->user()->associate($request->user());
            $androidDeviceToken->device_token = $request->device_token;
            $androidDeviceToken->save();

            $request->user()->androidDeviceTokens()->save($androidDeviceToken);

            return new AndroidDeviceTokenResource($androidDeviceToken);

        } else {
            return response()->json(['message' => 'このデバイストークンは登録済みです'], Response::HTTP_ALREADY_REPORTED);
        }
    }
}
