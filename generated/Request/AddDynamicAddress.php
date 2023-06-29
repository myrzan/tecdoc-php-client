<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing DynamicAddress
 *
 *
 * XSD Type: dynamicAddressRequest
 */
class AddDynamicAddress
{
    /**
     * @var string $address
     */
    private $address = null;

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
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

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

