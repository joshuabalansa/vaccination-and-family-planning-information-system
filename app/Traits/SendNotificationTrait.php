<?php

namespace App\Traits;

use GuzzleHttp\Client;
// use Mailtrap\Config;
// use Mailtrap\Helper\ResponseHelper;
// use Mailtrap\MailtrapClient;
// use Symfony\Component\Mime\Address;
// use Symfony\Component\Mime\Email;
// use Mailtrap\EmailHeader\CategoryHeader;
trait SendNotificationTrait
{

    /**
     * Send SMS Notification function
     *
     * @param int $recepient
     * @param string $message
     * @return void
     */
    public function sendMessageNotification($apikey, $number, $message, $sender)
    {

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

    /**
     * Send Email notificaiton function
     *
     * @return void
     */
    public function sendEmailNotification()
    {

        // $apiKey = '';
        // $mailtrap = new MailtrapClient(new Config($apiKey));

        // $email = (new Email())
        //     ->from(new Address('mailtrap@demomailtrap.com', 'Mailtrap Test'))
        //     ->to(new Address("jbalansa143@gmail.com"))
        //     ->subject('You are awesome!')
        //     ->text('Congrats for sending test email with Mailtrap!')
        // ;

        // $email->getHeaders()
        //     ->add(new CategoryHeader('Integration Test'))
        // ;

        // $response = $mailtrap->sending()->emails()->send($email);

        // var_dump(ResponseHelper::toArray($response));
    }
}
