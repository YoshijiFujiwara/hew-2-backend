<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test()
    {
        $this->notification('eocWFywNS5U:APA91bF5u1RqKkvx14b0I7gD0Fjo7I6c7BW52yPfJonMsK9rrxkBk5Wl1UlSyfzShV92oR2WWl8Hjd-Y7-Hr8Jkr0idPyGcWt8UngoNFKmW6U6v6jdfq27jD4QrzYYfpx1bmMZgWEx2T', 'hello');
    }

    public function notification($token, $title)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $token = $token;

        $notification = [
            'title' => $title,
            'sound' => true,
        ];

        $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

        $fcmNotification = [
            //'registration_ids' => $tokenList, //multple token array
            'to'        => $token, //single token
            'notification' => $notification,
            'data' => $extraNotificationData
        ];

        $headers = [
            'Authorization: key=AAAArjkVvWI:APA91bHFVGy0ATsjCJhCL0wfKpOjuVaOZpaIfu8NOkyEAkc-mxHERpilc9gKHHvEjvAzPuh-i0APyRzfY1eA_NlmEY1-8wehaMMggfcUQ1jYE6WNA4lRPl4dlqIQlyba5ALe6OW_AxZW',
            'Content-Type: application/json'
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);

        dd($result);
    }
}
