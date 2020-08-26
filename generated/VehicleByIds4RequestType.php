<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleByIds4RequestType
 *
 * 
 * XSD Type: vehicleByIds4Request
 */
class VehicleByIds4RequestType extends VehicleByIds4RequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var bool $axles
     */
    private $axles = null;

    /**
     * @var bool $cabs
     */
    private $cabs = null;

    /**
     * @var int[] $carIds
     */
    private $carIds = null;

    /**
     * @var string $countriesCarSelection
     */
    private $countriesCarSelection = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var bool $countryGroupFlag
     */
    private $countryGroupFlag = null;

    /**
     * @var bool $kbaData
     */
    private $kbaData = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var bool $motorCodes
     */
    private $motorCodes = null;

    /**
     * @var int $numberplateType
     */
    private $numberplateType = null;

    /**
     * @var bool $protoTypes
     */
    private $protoTypes = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $registrationInfo
     */
    private $registrationInfo = null;

    /**
     * @var bool $secondaryTypes
     */
    private $secondaryTypes = null;

    /**
     * @var bool $wheelbases
     */
    private $wheelbases = null;

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
     * Gets as axles
     *
     * @return bool
     */
    public function getAxles()
    {
        return $this->axles;
    }

    /**
     * Sets a new axles
     *
     * @param bool $axles
     * @return self
     */
    public function setAxles($axles)
    {
        $this->axles = $axles;
        return $this;
    }

    /**
     * Gets as cabs
     *
     * @return bool
     */
    public function getCabs()
    {
        return $this->cabs;
    }

    /**
     * Sets a new cabs
     *
     * @param bool $cabs
     * @return self
     */
    public function setCabs($cabs)
    {
        $this->cabs = $cabs;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToCarIds($array)
    {
        $this->carIds[] = $array;
        return $this;
    }

    /**
     * isset carIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarIds($index)
    {
        return isset($this->carIds[$index]);
    }

    /**
     * unset carIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarIds($index)
    {
        unset($this->carIds[$index]);
    }

    /**
     * Gets as carIds
     *
     * @return int[]
     */
    public function getCarIds()
    {
        return $this->carIds;
    }

    /**
     * Sets a new carIds
     *
     * @param int[] $carIds
     * @return self
     */
    public function setCarIds(array $carIds)
    {
        $this->carIds = $carIds;
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
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as kbaData
     *
     * @return bool
     */
    public function getKbaData()
    {
        return $this->kbaData;
    }

    /**
     * Sets a new kbaData
     *
     * @param bool $kbaData
     * @return self
     */
    public function setKbaData($kbaData)
    {
        $this->kbaData = $kbaData;
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
     * Gets as motorCodes
     *
     * @return bool
     */
    public function getMotorCodes()
    {
        return $this->motorCodes;
    }

    /**
     * Sets a new motorCodes
     *
     * @param bool $motorCodes
     * @return self
     */
    public function setMotorCodes($motorCodes)
    {
        $this->motorCodes = $motorCodes;
        return $this;
    }

    /**
     * Gets as numberplateType
     *
     * @return int
     */
    public function getNumberplateType()
    {
        return $this->numberplateType;
    }

    /**
     * Sets a new numberplateType
     *
     * @param int $numberplateType
     * @return self
     */
    public function setNumberplateType($numberplateType)
    {
        $this->numberplateType = $numberplateType;
        return $this;
    }

    /**
     * Gets as protoTypes
     *
     * @return bool
     */
    public function getProtoTypes()
    {
        return $this->protoTypes;
    }

    /**
     * Sets a new protoTypes
     *
     * @param bool $protoTypes
     * @return self
     */
    public function setProtoTypes($protoTypes)
    {
        $this->protoTypes = $protoTypes;
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
     * Gets as registrationInfo
     *
     * @return bool
     */
    public function getRegistrationInfo()
    {
        return $this->registrationInfo;
    }

    /**
     * Sets a new registrationInfo
     *
     * @param bool $registrationInfo
     * @return self
     */
    public function setRegistrationInfo($registrationInfo)
    {
        $this->registrationInfo = $registrationInfo;
        return $this;
    }

    /**
     * Gets as secondaryTypes
     *
     * @return bool
     */
    public function getSecondaryTypes()
    {
        return $this->secondaryTypes;
    }

    /**
     * Sets a new secondaryTypes
     *
     * @param bool $secondaryTypes
     * @return self
     */
    public function setSecondaryTypes($secondaryTypes)
    {
        $this->secondaryTypes = $secondaryTypes;
        return $this;
    }

    /**
     * Gets as wheelbases
     *
     * @return bool
     */
    public function getWheelbases()
    {
        return $this->wheelbases;
    }

    /**
     * Sets a new wheelbases
     *
     * @param bool $wheelbases
     * @return self
     */
    public function setWheelbases($wheelbases)
    {
        $this->wheelbases = $wheelbases;
        return $this;
    }


}

