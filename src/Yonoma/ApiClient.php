<?php

namespace Yonoma;

class ApiClient
{
    private $client;
    public $contacts;
    public $lists;
    public $tags;
    public $email;

    public function __construct($apiKey)
    {
        $this->client = new YonomaClient($apiKey);
        $this->contacts = new Contacts($this->client);
        $this->lists = new Lists($this->client);
        $this->tags = new Tags($this->client);
        $this->email = new Email($this->client);
    }
}