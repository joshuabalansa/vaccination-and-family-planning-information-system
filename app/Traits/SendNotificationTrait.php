<?php

namespace App\Traits;

trait SendNotificationTrait
{

    /**
     * Send SMS Notification function
     *
     * @param int $recepient
     * @param string $message
     * @return void
     */
    public function sendMessageNotification($recepient, $message) {

        $ch = curl_init();

        $parameters = [
            'apikey'      => env('SMS_API_KEY'),
            'number'      => $recepient,
            'message'     => $message,
            'sendername'  => env('SMS_SENDER_NAME', 'SEMAPHORE')
        ];

        curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        curl_exec( $ch );

        curl_close ($ch);

    }
}