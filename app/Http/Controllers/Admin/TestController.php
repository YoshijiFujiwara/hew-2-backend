<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\PushNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Pusher\Laravel\Facades\Pusher;

class TestController extends Controller
{
    public function notification(Request $request)
    {
        $this->dispatch(new PushNotification($request->sendMessage, [$request->deviceToken]));

        return response()->json(null, Response::HTTP_OK);
    }

    public function realtime()
    {
        Pusher::trigger('my-channel', 'my-event', ['message' => 'sssss']);
    }
}
