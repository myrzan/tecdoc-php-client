<?php


namespace Baumeister\TecDocClient;


use Baumeister\TecDocClient\Generated\GetArticles;
use Baumeister\TecDocClient\Generated\GetArticlesResponse;
use Baumeister\TecDocClient\Generated\GetLanguages;
use Baumeister\TecDocClient\Generated\GetLanguagesResponse;
use GuzzleHttp\Client as GuzzleClient;
use JsonMapper;
use ReflectionClass;
use RuntimeException;

class Client
{
    const TECDOC_JSON_ENDPOINT = "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=";

    private $client;
    private $url;
    private int $providerId;
    private $jsonMapper;

    public function __construct(string $apiKey, int $providerId)
    {
        $this->providerId = $providerId;
        $this->client = new GuzzleClient();
        $this->url = self::TECDOC_JSON_ENDPOINT . $apiKey;
        $this->jsonMapper = new JsonMapper();
    }

    public function getLanguages(GetLanguages $paramsObject) : GetLanguagesResponse
    {
        $json = $this->call('getLanguages', $paramsObject);
        return $this->jsonMapper->map($json, new GetLanguagesResponse());
    }

    public function getArticles(GetArticles $paramsObject) : GetArticlesResponse
    {
        $json = $this->call('getArticles', $paramsObject);
        return $this->jsonMapper->map($json, new GetArticlesResponse());
    }

    private function call(string $functionName, $paramsObject)
    {
        $paramsArray = self::paramsObjectToArray($paramsObject);
        $paramsArray['provider'] = $this->providerId;
        $jsonBody = [$functionName => $paramsArray];
        $response = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json' => $jsonBody
        ]);
        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getBody());
            if (isset($json->data->array)) {
                $json->data = $json->data->array;
                unset($json->data->array);
            }
            return $json;
        }
        throw new RuntimeException("HTTP request failed with code {$response->getStatusCode()}");
    }

    private static function paramsObjectToArray($object) : array {
        $reflectionClass = new ReflectionClass($object);
        $array = [];
        do {
            $properties = $reflectionClass->getProperties();
            foreach ($properties as $property) {
                $property->setAccessible(true);
                $value = $property->getValue($object);
                if (is_object($value)) {
                    $array[$property->getName()] = self::paramsObjectToArray($value);
                } else {
                    $array[$property->getName()] = $value;
                }
            }
        } while ($reflectionClass = $reflectionClass->getParentClass());
        return $array;
    }
}