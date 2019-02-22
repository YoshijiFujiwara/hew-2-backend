<?php
namespace App\Services;

class PushNotificationService
{
    public function sendNotification()
    {

    }

    /**
     * 通知の送信処理
     * @param array $tokenList 通知の送信先
     * @param $title メッセージ
     */
    public function notification($title, array $tokenList)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

        $notification = [
            'title' => $title,
            'sound' => true,
        ];

        $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

        $fcmNotification = [
            'registration_ids' => $tokenList, //multple token array
//            'to'        => $token, //single token
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
    }
}