<?php

namespace Yonoma;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class YonomaClient
{
    private $client;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => 'https://api.yonoma.io/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json',
                'User-Agent' => 'yonoma-php:1.0.0',
            ]
        ]);
    }

    public function request($method, $endpoint, $data = [])
    {
        try {
            $options = [];
            if (!empty($data)) {
                $options['json'] = $data; // Use JSON for request body
            }
            $response = $this->client->request($method, $endpoint, $options);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
}