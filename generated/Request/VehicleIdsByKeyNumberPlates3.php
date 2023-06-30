<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing VehicleIdsByKeyNumberPlates3
 *
 * 
 * XSD Type: vehicleIdsByKeyNumberPlates3Request
 */
class VehicleIdsByKeyNumberPlates3 
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var string $countriesCarSelection
     */
    private $countriesCarSelection = null;

    /**
     * @var bool $countryGroupFlag
     */
    private $countryGroupFlag = null;

    /**
     * @var string $keySystemNumber
     */
    private $keySystemNumber = null;

    /**
     * @var int $keySystemType
     */
    private $keySystemType = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as articleCountry
     *
     * @return string
     */
    public function getArticleCountry()
    {
        return $this->articleCountry;
    }

    /**
     * Sets a new articleCountry
     *
     * @param string $articleCountry
     * @return self
     */
    public function setArticleCountry($articleCountry)
    {
        $this->articleCountry = $articleCountry;
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
     * Gets as keySystemNumber
     *
     * @return string
     */
    public function getKeySystemNumber()
    {
        return $this->keySystemNumber;
    }

    /**
     * Sets a new keySystemNumber
     *
     * @param string $keySystemNumber
     * @return self
     */
    public function setKeySystemNumber($keySystemNumber)
    {
        $this->keySystemNumber = $keySystemNumber;
        return $this;
    }

    /**
     * Gets as keySystemType
     *
     * @return int
     */
    public function getKeySystemType()
    {
        return $this->keySystemType;
    }

    /**
     * Sets a new keySystemType
     *
     * @param int $keySystemType
     * @return self
     */
    public function setKeySystemType($keySystemType)
    {
        $this->keySystemType = $keySystemType;
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

