<?php

namespace Yonoma;

class Contacts
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($listId, $contactData)
    {
        $endpoint = 'contacts/' . $listId . '/create';
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function update($listId, $contactId, $contactData)
    {
        $endpoint = 'contacts/' . $listId . '/status/' . $contactId;
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function addTag($contactId, $contactData)
    {
        $endpoint = 'contacts/tags/' . $contactId . '/add';
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function removeTag($contactId, $contactData)
    {
        $endpoint = 'contacts/tags/' . $contactId . '/remove';
        return $this->client->request('POST', $endpoint, $contactData);
    }
}