<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing Version
 *
 * 
 * XSD Type: versionRequest
 */
class GetVersionRequest
{

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as provider
     *
     * Your assigned TecDoc Provider Id
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * Your assigned TecDoc Provider Id
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}

