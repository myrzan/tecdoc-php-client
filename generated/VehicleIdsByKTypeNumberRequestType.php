<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleIdsByKTypeNumberRequestType
 *
 * 
 * XSD Type: vehicleIdsByKTypeNumberRequest
 */
class VehicleIdsByKTypeNumberRequestType extends VehicleIdsByKTypeNumberRequestSrcType
{

    /**
     * @var string $carType
     */
    private $carType = null;

    /**
     * @var string $countriesCarSelection
     */
    private $countriesCarSelection = null;

    /**
     * @var bool $countryGroupFlag
     */
    private $countryGroupFlag = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var int $typeNumber
     */
    private $typeNumber = null;

    /**
     * @var int $rmiTypeId
     */
    private $rmiTypeId = null;

    /**
     * Gets as carType
     *
     * @return string
     */
    public function getCarType()
    {
        return $this->carType;
    }

    /**
     * Sets a new carType
     *
     * @param string $carType
     * @return self
     */
    public function setCarType($carType)
    {
        $this->carType = $carType;
        return $this;
    }

    /**
     * Gets as countriesCarSelection
     *
     * @return string
     */
    public function getCountriesCarSelection()
    {
        return $this->countriesCarSelection;
    }

    /**
     * Sets a new countriesCarSelection
     *
     * @param string $countriesCarSelection
     * @return self
     */
    public function setCountriesCarSelection($countriesCarSelection)
    {
        $this->countriesCarSelection = $countriesCarSelection;
        return $this;
    }

    /**
     * Gets as countryGroupFlag
     *
     * @return bool
     */
    public function getCountryGroupFlag()
    {
        return $this->countryGroupFlag;
    }

    /**
     * Sets a new countryGroupFlag
     *
     * @param bool $countryGroupFlag
     * @return self
     */
    public function setCountryGroupFlag($countryGroupFlag)
    {
        $this->countryGroupFlag = $countryGroupFlag;
        return $this;
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
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
     * Gets as typeNumber
     *
     * @return int
     */
    public function getTypeNumber()
    {
        return $this->typeNumber;
    }

    /**
     * Sets a new typeNumber
     *
     * @param int $typeNumber
     * @return self
     */
    public function setTypeNumber($typeNumber)
    {
        $this->typeNumber = $typeNumber;
        return $this;
    }

    /**
     * Gets as rmiTypeId
     *
     * @return int
     */
    public function getRmiTypeId()
    {
        return $this->rmiTypeId;
    }

    /**
     * Sets a new rmiTypeId
     *
     * @param int $rmiTypeId
     * @return self
     */
    public function setRmiTypeId($rmiTypeId)
    {
        $this->rmiTypeId = $rmiTypeId;
        return $this;
    }


}

