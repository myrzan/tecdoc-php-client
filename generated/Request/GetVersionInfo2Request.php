<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing VersionInfo2
 *
 * 
 * XSD Type: versionInfo2Request
 */
class GetVersionInfo2Request
{

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as provider
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
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}

