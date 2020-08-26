<?php

namespace Myrzan\TecDocClient\Tests;

use Myrzan\TecDocClient\Client;
use Myrzan\TecDocClient\Generated\GetAmBrands;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTarget4;
use Myrzan\TecDocClient\Generated\GetArticleLinkedAllLinkingTargetsByIds3;
use Myrzan\TecDocClient\Generated\GetArticles;
use Myrzan\TecDocClient\Generated\GetLanguages;
use Myrzan\TecDocClient\Generated\GetVehicleByIds3;
use Myrzan\TecDocClient\Generated\LinkedArticlePairType;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private $tecDocClient;

    protected function setUp(): void
    {
        $this->tecDocClient = new Client(
            getenv('TECDOC_API_KEY'),
            intval(getenv('TECDOC_PROVIDER_ID'))
        );
    }

    public function testGetLanguages()
    {
        $params = (new GetLanguages())->setLang('de');

        $response = $this->tecDocClient->getLanguages($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetAmBrands()
    {
        $params = (new GetAmBrands())
            ->setLang('de')
            ->setArticleCountry('de');

        $response = $this->tecDocClient->getAmBrands($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetArticles()
    {
        $params = (new GetArticles())
            ->setLang('de')
            ->setArticleCountry('de')
            ->setDataSupplierIds([4])
            ->setPerPage(10)
            ->setPage(1);

        $response = $this->tecDocClient->getArticles($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetArticleLinkedAllLinkingTargetsByIds3()
    {
        $params = (new GetArticleLinkedAllLinkingTargetsByIds3())
            ->setLang('de')
            ->setArticleCountry('de')
            ->setArticleId(6784816)
            ->setLinkingTargetType('P')
            ->setNumberplateType(20)
            ->setImmediateAttributs(true)
            ->setLinkedArticlePairs([
                (new LinkedArticlePairType())
                    ->setArticleLinkId(6785022)
                    ->setLinkingTargetId(1808),
                (new LinkedArticlePairType())
                    ->setArticleLinkId(6785053)
                    ->setLinkingTargetId(1809),
                (new LinkedArticlePairType())
                    ->setArticleLinkId(6784973)
                    ->setLinkingTargetId(1795),
            ]);

        $response = $this->tecDocClient->getArticleLinkedAllLinkingTargetsByIds3($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetArticleLinkedAllLinkingTarget4()
    {
        $params = (new GetArticleLinkedAllLinkingTarget4())
            ->setLang('de')
            ->setCountry('de')
            ->setArticleCountry('de')
            ->setArticleId(6784816)
            ->setLinkingTargetType('P');

        $response = $this->tecDocClient->getArticleLinkedAllLinkingTarget4($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetArticleLinkedAllLinkingTarget4_HandleEmptyResult()
    {
        $params = (new GetArticleLinkedAllLinkingTarget4())
            ->setLang('de')
            ->setCountry('de')
            ->setArticleCountry('de')
            ->setArticleId(4513536)
            ->setLinkingTargetType('P');

        $response = $this->tecDocClient->getArticleLinkedAllLinkingTarget4($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }

    public function testGetVehicleByIds3()
    {
        $params = (new GetVehicleByIds3())
            ->setLang('de')
            ->setArticleCountry('de')
            ->setCountriesCarSelection('de')
            ->setCountry('de')
            ->setAxles(true)
            ->setCabs(true)
            ->setKbaData(true)
            ->setMotorCodes(true)
            ->setProtoTypes(true)
            ->setRegistrationInfo(true)
            ->setSecondaryTypes(true)
            ->setWheelbases(true)
            ->setCarIds([1808, 1809, 1795]);

        $response = $this->tecDocClient->getVehicleByIds3($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }


    public function testGetVehicleByIds3_handleResponseWithEmptyStringsInPlaceOfArrays()
    {
        $params = (new GetVehicleByIds3())
            ->setLang('de')
            ->setArticleCountry('de')
            ->setCountriesCarSelection('de')
            ->setCountry('de')
            ->setAxles(true)
            ->setCabs(true)
            ->setKbaData(true)
            ->setMotorCodes(true)
            ->setProtoTypes(true)
            ->setRegistrationInfo(true)
            ->setSecondaryTypes(true)
            ->setWheelbases(true)
            ->setCarIds([102028, 105077]);

        $response = $this->tecDocClient->getVehicleByIds3($params);

        print_r($response);
        $this->assertEquals(200, $response->getStatus());
    }
}
