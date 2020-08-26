<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing MotorIdsByManuIdCriteria2RequestType
 *
 * 
 * XSD Type: motorIdsByManuIdCriteria2Request
 */
class MotorIdsByManuIdCriteria2RequestType extends MotorIdsByManuIdCriteria2RequestSrcType
{

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var int $cylinderCapacityFrom
     */
    private $cylinderCapacityFrom = null;

    /**
     * @var int $cylinderCapacityTo
     */
    private $cylinderCapacityTo = null;

    /**
     * @var int $fuelTypeId
     */
    private $fuelTypeId = null;

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
     * @var int $powerFrom
     */
    private $powerFrom = null;

    /**
     * @var bool $powerHpType
     */
    private $powerHpType = null;

    /**
     * @var int $powerTo
     */
    private $powerTo = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $searchExactCode
     */
    private $searchExactCode = null;

    /**
     * @var bool $searchExactTerm
     */
    private $searchExactTerm = null;

    /**
     * @var string $sellsTerm
     */
    private $sellsTerm = null;

    /**
     * @var int $yearOfConstruction
     */
    private $yearOfConstruction = null;

    /**
     * @var bool $countryGroupFlag
     */
    private $countryGroupFlag = null;

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
     * Gets as cylinderCapacityFrom
     *
     * @return int
     */
    public function getCylinderCapacityFrom()
    {
        return $this->cylinderCapacityFrom;
    }

    /**
     * Sets a new cylinderCapacityFrom
     *
     * @param int $cylinderCapacityFrom
     * @return self
     */
    public function setCylinderCapacityFrom($cylinderCapacityFrom)
    {
        $this->cylinderCapacityFrom = $cylinderCapacityFrom;
        return $this;
    }

    /**
     * Gets as cylinderCapacityTo
     *
     * @return int
     */
    public function getCylinderCapacityTo()
    {
        return $this->cylinderCapacityTo;
    }

    /**
     * Sets a new cylinderCapacityTo
     *
     * @param int $cylinderCapacityTo
     * @return self
     */
    public function setCylinderCapacityTo($cylinderCapacityTo)
    {
        $this->cylinderCapacityTo = $cylinderCapacityTo;
        return $this;
    }

    /**
     * Gets as fuelTypeId
     *
     * @return int
     */
    public function getFuelTypeId()
    {
        return $this->fuelTypeId;
    }

    /**
     * Sets a new fuelTypeId
     *
     * @param int $fuelTypeId
     * @return self
     */
    public function setFuelTypeId($fuelTypeId)
    {
        $this->fuelTypeId = $fuelTypeId;
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
     * Gets as powerFrom
     *
     * @return int
     */
    public function getPowerFrom()
    {
        return $this->powerFrom;
    }

    /**
     * Sets a new powerFrom
     *
     * @param int $powerFrom
     * @return self
     */
    public function setPowerFrom($powerFrom)
    {
        $this->powerFrom = $powerFrom;
        return $this;
    }

    /**
     * Gets as powerHpType
     *
     * @return bool
     */
    public function getPowerHpType()
    {
        return $this->powerHpType;
    }

    /**
     * Sets a new powerHpType
     *
     * @param bool $powerHpType
     * @return self
     */
    public function setPowerHpType($powerHpType)
    {
        $this->powerHpType = $powerHpType;
        return $this;
    }

    /**
     * Gets as powerTo
     *
     * @return int
     */
    public function getPowerTo()
    {
        return $this->powerTo;
    }

    /**
     * Sets a new powerTo
     *
     * @param int $powerTo
     * @return self
     */
    public function setPowerTo($powerTo)
    {
        $this->powerTo = $powerTo;
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
     * Gets as searchExactCode
     *
     * @return bool
     */
    public function getSearchExactCode()
    {
        return $this->searchExactCode;
    }

    /**
     * Sets a new searchExactCode
     *
     * @param bool $searchExactCode
     * @return self
     */
    public function setSearchExactCode($searchExactCode)
    {
        $this->searchExactCode = $searchExactCode;
        return $this;
    }

    /**
     * Gets as searchExactTerm
     *
     * @return bool
     */
    public function getSearchExactTerm()
    {
        return $this->searchExactTerm;
    }

    /**
     * Sets a new searchExactTerm
     *
     * @param bool $searchExactTerm
     * @return self
     */
    public function setSearchExactTerm($searchExactTerm)
    {
        $this->searchExactTerm = $searchExactTerm;
        return $this;
    }

    /**
     * Gets as sellsTerm
     *
     * @return string
     */
    public function getSellsTerm()
    {
        return $this->sellsTerm;
    }

    /**
     * Sets a new sellsTerm
     *
     * @param string $sellsTerm
     * @return self
     */
    public function setSellsTerm($sellsTerm)
    {
        $this->sellsTerm = $sellsTerm;
        return $this;
    }

    /**
     * Gets as yearOfConstruction
     *
     * @return int
     */
    public function getYearOfConstruction()
    {
        return $this->yearOfConstruction;
    }

    /**
     * Sets a new yearOfConstruction
     *
     * @param int $yearOfConstruction
     * @return self
     */
    public function setYearOfConstruction($yearOfConstruction)
    {
        $this->yearOfConstruction = $yearOfConstruction;
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


}

