<?php

namespace Baumeister\TecDocClient\Tests;

use Baumeister\TecDocClient\TecDocClient;
use PHPUnit\Framework\TestCase;

class TecDocClientTest extends TestCase
{

    public function testGetLanguages()
    {
        $tecDocClient = new TecDocClient(getenv('TECDOC_API_KEY'), [
            'provider' => intval(getenv('TECDOC_PROVIDER_ID')),
            'lang' => 'de'
        ]);

        echo $tecDocClient->getLanguages()->getBody();
    }
}
