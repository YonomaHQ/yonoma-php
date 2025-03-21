<?php

namespace Yonoma;

class Tags
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($tagData)
    {
        $endpoint = 'tags/create';
        return $this->client->request('POST', $endpoint, $tagData);
    }

    public function list()
    {
        $endpoint = 'tags/list';
        return $this->client->request('GET', $endpoint);
    }

    public function retrieve($tagId)
    {
        $endpoint = 'tags/' . $tagId;
        return $this->client->request('GET', $endpoint);
    }

    public function update($tagId, $listData)
    {
        $endpoint = 'tags/' . $tagId . '/update';
        return $this->client->request('POST', $endpoint, $tagData);
    }
    
    public function delete($tagId)
    {
        $endpoint = 'tags/' . $tagId . '/delete';
        return $this->client->request('DELETE', $endpoint);
    }
}