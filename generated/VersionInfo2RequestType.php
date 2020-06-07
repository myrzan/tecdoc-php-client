<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VersionInfo2RequestType
 *
 * 
 * XSD Type: versionInfo2Request
 */
class VersionInfo2RequestType extends VersionInfo2RequestSrcType
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

