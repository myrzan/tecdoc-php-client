<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorsByCarTypeManuIdTerm2RequestType
 *
 * 
 * XSD Type: motorsByCarTypeManuIdTerm2Request
 */
class MotorsByCarTypeManuIdTerm2RequestType extends MotorsByCarTypeManuIdTerm2RequestSrcType
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
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $motorCode
     */
    private $motorCode = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $searchExact
     */
    private $searchExact = null;

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
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
        return $this;
    }

    /**
     * Gets as motorCode
     *
     * @return string
     */
    public function getMotorCode()
    {
        return $this->motorCode;
    }

    /**
     * Sets a new motorCode
     *
     * @param string $motorCode
     * @return self
     */
    public function setMotorCode($motorCode)
    {
        $this->motorCode = $motorCode;
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
     * Gets as searchExact
     *
     * @return bool
     */
    public function getSearchExact()
    {
        return $this->searchExact;
    }

    /**
     * Sets a new searchExact
     *
     * @param bool $searchExact
     * @return self
     */
    public function setSearchExact($searchExact)
    {
        $this->searchExact = $searchExact;
        return $this;
    }


}

