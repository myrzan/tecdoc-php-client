<?php


namespace Baumeister\TecDocClient;


use Baumeister\TecDocClient\DTO\GetArticlesResponse;
use Baumeister\TecDocClient\DTO\GetLanguagesResponse;
use GuzzleHttp\Client as GuzzleClient;
use JsonMapper;
use RuntimeException;

class Client
{
    const TECDOC_JSON_ENDPOINT = "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=";

    private $client;
    private $url;
    private array $defaultParams;
    private int $providerId;
    private $jsonMapper;

    public function __construct(string $apiKey, int $providerId, array $defaultParams)
    {
        $this->providerId = $providerId;
        $this->defaultParams = $defaultParams;
        $this->client = new GuzzleClient();
        $this->url = self::TECDOC_JSON_ENDPOINT . $apiKey;
        $this->jsonMapper = new JsonMapper();
    }

    public function getLanguages(string $lang = null) : GetLanguagesResponse
    {
        $params = [];
        if (is_string($lang)) $params['lang'] = $lang;
        $json = $this->call('getLanguages', $params);
        return $this->jsonMapper->map($json, new GetLanguagesResponse());
    }

    public function getArticles(string $lang = null, string $articleCountry = null, array $dataSupplierIds = []) : GetArticlesResponse
    {
        $params = ['dataSupplierIds' => $dataSupplierIds];
        if (is_string($lang)) $params['lang'] = $lang;
        if (is_string($articleCountry)) $params['articleCountry'] = $articleCountry;
        $json = $this->call('getArticles', $params);
        return $this->jsonMapper->map($json, new GetArticlesResponse());
    }

    private function call(string $functionName, array $params)
    {
        $response = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json' => [
                $functionName => array_merge(['provider' => $this->providerId], $this->defaultParams, $params)
            ]
        ]);
        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody());
        }
        throw new RuntimeException('HTTP request failed.');
    }
}