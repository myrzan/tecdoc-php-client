<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing VehicleIdsByMotor2
 *
 *
 * XSD Type: vehicleIdsByMotor2Request
 */
class GetVehicleIdsByMotor2
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
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * @var int $provider
     */
    private $provider = null;

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
     * Gets as motorId
     *
     * @return int
     */
    public function getMotorId()
    {
        return $this->motorId;
    }

    /**
     * Sets a new motorId
     *
     * @param int $motorId
     * @return self
     */
    public function setMotorId($motorId)
    {
        $this->motorId = $motorId;
        return $this;
    }

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

