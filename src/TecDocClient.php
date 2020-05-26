<?php


namespace Baumeister\TecDocClient;


use GuzzleHttp\Client;
use JsonMapper;

class TecDocClient
{
    private $client;
    private $url;
    private array $defaultParams;
    private int $providerId;
    private $jsonMapper;

    public function __construct(string $apiKey, int $providerId, array $defaultParams)
    {
        $this->providerId = $providerId;
        $this->defaultParams = $defaultParams;
        $this->client = new Client();
        $this->url = "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=" . $apiKey;
        $this->jsonMapper = new JsonMapper();
    }

    public function getLanguages(string $lang = null) : GetLanguagesResponse
    {
        $params = [];
        if (is_string($lang)) $params['lang'] = $lang;
        $response = $this->call('getLanguages', $params);
        $json = json_decode($response->getBody());
        return $this->jsonMapper->map($json, new GetLanguagesResponse());
    }

    private function call(string $functionName, array $params)
    {
        $response = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json' => [
                $functionName => array_merge(['provider' => $this->providerId], $this->defaultParams, $params)
            ]
        ]);
        return $response;
    }
}