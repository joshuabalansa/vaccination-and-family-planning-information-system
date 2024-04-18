<?php

namespace App\Traits;
use GuzzleHttp\Client;
trait SendNotificationTrait
{

    /**
     * Send SMS Notification function
     *
     * @param int $recepient
     * @param string $message
     * @return void
     */
    public function sendMessageNotification($apikey, $number, $message, $sender) {

        $client = new Client();

        $parameters = [
            'form_params'    => [
                'apikey'     => $apikey,
                'number'     => $number,
                'message'    => $message,
                'sendername' => $sender
            ]
        ];

        try {

           $client->post(env('SMS_API_URL'), $parameters);

        } catch (\GuzzleHttp\Exception\RequestException $e) {

            \Log::error($e->getMessage());
        }

    }
}