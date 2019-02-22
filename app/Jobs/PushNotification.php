<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PushNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $title;
    protected $tokenList;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($title, array $tokenList)
    {
        $this->title = $title;
        $this->tokenList = $tokenList;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (empty($this->tokenList)) {
            return true;
        }

        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

        $notification = [
            'title' => $this->title,
            'sound' => true,
        ];

        $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

        $fcmNotification = [
            'registration_ids' => $this->tokenList, //multple token array
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
