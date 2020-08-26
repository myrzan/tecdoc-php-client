<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing DynamicAPIKeyRequestType
 *
 * 
 * XSD Type: dynamicAPIKeyRequest
 */
class DynamicAPIKeyRequestType extends DynamicAPIKeyRequestSrcType
{

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var int $validityHours
     */
    private $validityHours = null;

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

    /**
     * Gets as validityHours
     *
     * @return int
     */
    public function getValidityHours()
    {
        return $this->validityHours;
    }

    /**
     * Sets a new validityHours
     *
     * @param int $validityHours
     * @return self
     */
    public function setValidityHours($validityHours)
    {
        $this->validityHours = $validityHours;
        return $this;
    }


}

