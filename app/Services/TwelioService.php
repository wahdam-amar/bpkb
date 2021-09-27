<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwelioService
{
    protected $sid_key;
    protected $token_key;
    protected $client;

    public function __construct()
    {
        $this->sid_key = env('TWELIO_SID');
        $this->token_key = env('TWELIO_TOKEN');
        $this->client = new Client($this->sid_key, $this->token_key);
    }

    /**
     * Send Message
     *
     * @param String $to Destination number
     * @param message $to Message content
     * @return type
     * @throws conditon
     **/
    public function sendMessage(String $to, String $message)
    {
        $this->client->messages->create(
            // the number you'd like to send the message to
            'whatsapp:' . $to,
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => 'whatsapp:+14155238886',
                // the body of the text message you'd like to send
                'body' => $message
            ]
        );
    }
}
