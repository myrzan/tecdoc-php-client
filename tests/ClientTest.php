<?php

namespace Baumeister\TecDocClient\Tests;

use Baumeister\TecDocClient\Client;
use Baumeister\TecDocClient\Generated\GetArticles;
use Baumeister\TecDocClient\Generated\GetLanguages;
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

        $getLanguagesResponse = $this->tecDocClient->getLanguages($params);

        print_r($getLanguagesResponse);
    }

    public function testGetArticles()
    {
        $params = (new GetArticles())
            ->setLang('de')
            ->setArticleCountry('de')
            ->setDataSupplierIds([4]);

        $getArticlesResponse = $this->tecDocClient->getArticles($params);

        print_r($getArticlesResponse);
    }
}
