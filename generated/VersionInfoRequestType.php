<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VersionInfoRequestType
 *
 * 
 * XSD Type: versionInfoRequest
 */
class VersionInfoRequestType extends VersionInfoRequestSrcType
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

