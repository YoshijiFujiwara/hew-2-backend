<?php

namespace App\Http\Controllers\Admin;

use App\Services\PushNotificationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function test()
    {
        $this->pushNotificationService->notification('hello', ['eocWFywNS5U:APA91bF5u1RqKkvx14b0I7gD0Fjo7I6c7BW52yPfJonMsK9rrxkBk5Wl1UlSyfzShV92oR2WWl8Hjd-Y7-Hr8Jkr0idPyGcWt8UngoNFKmW6U6v6jdfq27jD4QrzYYfpx1bmMZgWEx2T']);
    }

    public function notification(Request $request)
    {
        $this->pushNotificationService->notification($request->sendMessage, [$request->deviceToken]);

        return response()->json(null, Response::HTTP_OK);
    }
}
