<?php


namespace Baumeister\TecDocClient;


use GuzzleHttp\Client;

class TecDocClient
{
    private $client;
    private $url;
    private array $defaultParams;

    public function __construct(string $apiKey, array $defaultParams)
    {
        $this->defaultParams = $defaultParams;
        $this->client = new Client();
        $this->url = "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=" . $apiKey;
    }

    public function getLanguages(array $params = [])
    {
        return $this->call('getLanguages', $params);
    }

    private function call(string $functionName, array $params) {
        $response = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json' => [$functionName => array_merge($this->defaultParams, $params)]
        ]);
        return $response;
    }
}