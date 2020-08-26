<?php
namespace Myrzan\TecDocClient;

use Myrzan\TecDocClient\Generated\GetAmBrands;
use Myrzan\TecDocClient\Generated\GetAmBrandsResponse;
use Myrzan\TecDocClient\Generated\GetArticleDirectSearchAllNumbersWithState;
use Myrzan\TecDocClient\Generated\GetArticleDirectSearchAllNumbersWithStateResponse;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTarget4;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTarget4Response;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTargetsByIds3;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTargetsByIds3Response;
use Myrzan\TecDocClient\Generated\GetArticles;
use Myrzan\TecDocClient\Generated\GetArticlesResponse;
use Myrzan\TecDocClient\Generated\GetLanguages;
use Myrzan\TecDocClient\Generated\GetLanguagesResponse;
use Myrzan\TecDocClient\Generated\GetVehicleByIds3;
use Myrzan\TecDocClient\Generated\GetVehicleByIds3Response;
use GuzzleHttp\Client as GuzzleClient;
use JsonMapper;
use ReflectionClass;
use ReflectionObject;
use RuntimeException;
use stdClass;

/**
 * TecDoc API Client.
 */
class Client
{
    const TECDOC_JSON_ENDPOINT =
        "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=";

    private $client;
    private $url;
    private $providerId;
    private $jsonMapper;
    private $apiKey;

    /**
     * Class constructor.
     *
     * @param string $apiKey
     * @param int    $providerId
     */
    public function __construct(string $apiKey, int $providerId)
    {
        $this->providerId = $providerId;
        $this->client     = new GuzzleClient();
        $this->url        = self::TECDOC_JSON_ENDPOINT . $apiKey;
        $this->jsonMapper = new JsonMapper();
        $this->apiKey     = $apiKey;
    }

    public function getLanguages(GetLanguages $paramsObject): GetLanguagesResponse
    {
        $json = $this->call('getLanguages', $paramsObject);
        return $this->mapJsonToObject($json, new GetLanguagesResponse());
    }

    public function getAmBrands(GetAmBrands $paramsObject): GetAmBrandsResponse
    {
        $json = $this->call('getAmBrands', $paramsObject);
        return $this->mapJsonToObject($json, new GetAmBrandsResponse());
    }

    public function getArticles(GetArticles $paramsObject): GetArticlesResponse
    {
        $json = $this->call('getArticles', $paramsObject);
        return $this->mapJsonToObject($json, new GetArticlesResponse());
    }

    public function getVehicleByIds3(GetVehicleByIds3 $paramsObject): GetVehicleByIds3Response
    {
        Client::addIntermediatePropNamedArray($paramsObject, 'carIds');
        $json = $this->call('getVehicleByIds3', $paramsObject);
        return $this->mapJsonToObject($json, new GetVehicleByIds3Response());
    }

    public function getArticleLinkedAllLinkingTargetsByIds3(GetArticleLinkedAllLinkingTargetsByIds3 $paramsObject): GetArticleLinkedAllLinkingTargetsByIds3Response
    {
        Client::addIntermediatePropNamedArray($paramsObject, 'linkedArticlePairs');
        $json = $this->call('getArticleLinkedAllLinkingTargetsByIds3', $paramsObject);
        return $this->mapJsonToObject($json, new GetArticleLinkedAllLinkingTargetsByIds3Response());
    }

    public function getArticleLinkedAllLinkingTarget4(GetArticleLinkedAllLinkingTarget4 $paramsObject): GetArticleLinkedAllLinkingTarget4Response
    {
        $json = $this->call('getArticleLinkedAllLinkingTarget4', $paramsObject);

        // Handle empty API result with invalid property value
        if (sizeof($json->data) == 1 and is_string($json->data[0]->articleLinkages)) {
            $json->data = [];
        }

        return $this->mapJsonToObject($json, new GetArticleLinkedAllLinkingTarget4Response());
    }

    public function getArticleDirectSearchAllNumbersWithState(GetArticleDirectSearchAllNumbersWithState $paramsObject): GetArticleDirectSearchAllNumbersWithStateResponse
    {
        $json = $this->call('getArticleDirectSearchAllNumbersWithState', $paramsObject);

        return $this->mapJsonToObject($json, new GetArticleDirectSearchAllNumbersWithStateResponse());
    }

    private function call(string $functionName, $paramsObject)
    {
        $paramsArray             = self::recursivelyTransformObjectToArray($paramsObject);
        $paramsArray['provider'] = $this->providerId;
        $jsonBody                = [
            $functionName => $paramsArray
        ];
        $response                = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json'   => $jsonBody
        ]);

        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getBody());
            Client::recursivelyRemoveIntermediatePropsNamedArray($json);

            return $json;
        }

        throw new RuntimeException("HTTP request failed with code {$response->getStatusCode()}");
    }

    private static function recursivelyRemoveIntermediatePropsNamedArray($obj, $parentObj = null, $propName = null)
    {
        foreach ($obj as $prop => $val) {
            if ($prop === 'array' && $parentObj != null && $propName != null) {
                $parentObj->$propName = $val;

                unset($obj->array);
            }

            if (is_object($val) or is_array($val)) {
                Client::recursivelyRemoveIntermediatePropsNamedArray($val, $obj, $prop);
            }
        }
    }

    private static function addIntermediatePropNamedArray(object $paramsObject, string $propName): void
    {
        $reflectionClass    = new ReflectionClass($paramsObject);
        $reflectionProperty = $reflectionClass->getParentClass()->getProperty($propName);

        $reflectionProperty->setAccessible(true);

        $propValue          = new stdClass();
        $propValue->array   = $reflectionProperty->getValue($paramsObject);

        $reflectionProperty->setValue($paramsObject, $propValue);
    }

    private static function recursivelyTransformObjectToArray($object)
    {
        if (is_array($object)) {
            $result = [];

            foreach ($object as $k => $v) {
                $result[$k] = self::recursivelyTransformObjectToArray($v);
            }

            return $result;
        } else if (is_object($object)) {
            $result = [];

            try {
                $reflection = $object instanceof stdClass ? new ReflectionObject($object) : new ReflectionClass($object);
                do {
                    $properties = $reflection->getProperties();

                    foreach ($properties as $property) {
                        $property->setAccessible(true);

                        $propName          = $property->getName();
                        $result[$propName] = self::recursivelyTransformObjectToArray($property->getValue($object));
                    }
                } while ($reflection = $reflection->getParentClass());
            } catch (\ReflectionException $e) {
                print_r($e);
            }

            return $result;
        }

        return $object;
    }

    private function mapJsonToObject($json, $object)
    {
        try {
            return $this->jsonMapper->map($json, $object);
        } catch (\JsonMapper_Exception $e) {

            // Replace empty string with empty array and try again
            if (preg_match('/JSON property "(.+)" must be an array, string given/', $e->getMessage(), $matches)) {
                $propName = $matches[1];
                $this->findNestedPropAndSetValue($json, $propName, '', []);

                return $this->mapJsonToObject($json, $object);
            }

            throw $e;
        }
    }

    private function findNestedPropAndSetValue($obj, string $propName, $propValue, $newValue)
    {
        if (!is_object($obj)) {
            return;
        }

        foreach ($obj as $p => $v) {

            if ($p === $propName and $v === $propValue) {
                $obj->$p = $newValue;
            }

            if (is_object($v)) {
                $this->findNestedPropAndSetValue($v, $propName, $propValue, $newValue);
            }

            if (is_array($v)) {
                foreach ($v as $k => $v1) {
                    $this->findNestedPropAndSetValue($v1, $propName, $propValue, $newValue);
                }
            }
        }
    }
}