<?php

namespace Baumeister\TecDocClient\Tests;

use Baumeister\TecDocClient\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private $tecDocClient;

    protected function setUp() : void
    {
        $this->tecDocClient = new Client(getenv('TECDOC_API_KEY'), intval(getenv('TECDOC_PROVIDER_ID')), [
            'lang' => 'de'
        ]);
    }

    public function testGetLanguages()
    {
        print_r($this->tecDocClient->getLanguages());
    }

    public function testGetArticles()
    {
        print_r($this->tecDocClient->getArticles('de', 'de', [4]));
    }
}
