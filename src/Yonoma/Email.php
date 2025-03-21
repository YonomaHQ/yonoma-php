<?php

namespace Yonoma;

class Email
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function sendEmail($emailData)
    {
        $endpoint = 'email/send';
        return $this->client->request('POST', $endpoint, $emailData);
    }
}