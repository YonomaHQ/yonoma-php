<?php

namespace Yonoma;

class Lists
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($listData)
    {
        $endpoint = 'lists/create';
        return $this->client->request('POST', $endpoint, $listData);
    }

    public function list()
    {
        $endpoint = 'lists/list';
        return $this->client->request('GET', $endpoint);
    }

    public function retrieve($listId)
    {
        $endpoint = 'lists/' . $listId;
        return $this->client->request('GET', $endpoint);
    }

    public function update($listId, $listData)
    {
        $endpoint = 'lists/' . $listId . '/update';
        return $this->client->request('POST', $endpoint, $listData);
    }

    public function delete($listId)
    {
        $endpoint = 'lists/' . $listId . '/delete';
        return $this->client->request('DELETE', $endpoint);
    }
}