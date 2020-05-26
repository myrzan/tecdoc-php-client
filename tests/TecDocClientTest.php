<?php

namespace Baumeister\TecDocClient\Tests;

use Baumeister\TecDocClient\TecDocClient;
use PHPUnit\Framework\TestCase;

class TecDocClientTest extends TestCase
{

    public function testGetLanguages()
    {
        $tecDocClient = new TecDocClient(getenv('TECDOC_API_KEY'), intval(getenv('TECDOC_PROVIDER_ID')), [
            'lang' => 'de'
        ]);

        print_r($tecDocClient->getLanguages());
    }
}
