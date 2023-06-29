<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing VersionInfo
 *
 * 
 * XSD Type: versionInfoRequest
 */
class GetVersionInfoRequest
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

