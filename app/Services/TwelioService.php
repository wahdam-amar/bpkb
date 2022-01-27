<?php

namespace App\Services;

use Illuminate\Support\Str;
use Twilio\Rest\Client;

class TwelioService
{
    protected $sid_key;
    protected $token_key;
    protected $client;
    protected $message;

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
    public function send(String $to, String $message = null)
    {
        $this->to = str_replace(' ', '', $to);

        if ($this->firstWithZero($this->to)) {
            $this->to = '+62' . substr($this->to, 1);
        }

        $this->client->messages->create(
            // the number you'd like to send the message to
            'whatsapp:' . $this->to,
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => 'whatsapp:+14155238886',
                // the body of the text message you'd like to send
                'body' => $message ?? $this->message,
            ]
        );
    }

    public function content(String $content)
    {
        $this->message = $content;

        return $this;
    }

    public function parseMessage(array $rule)
    {
        foreach ($rule as $from => $to) {
            $this->message = Str::replace($from, $to, $this->message);
        }

        return $this;
    }

    public function firstWithZero(String $number)
    {
        return Str::startsWith($number, '0');
    }
}
