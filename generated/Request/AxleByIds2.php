<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing AxleByIds2
 *
 * 
 * XSD Type: axleByIds2Request
 */
class AxleByIds2 
{

    /**
     * @var int[] $axleIds
     */
    private $axleIds = null;

    /**
     * @var bool $bodyTypes
     */
    private $bodyTypes = null;

    /**
     * @var string $country
     */
    private $country = null;

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
     * @var bool $countryGroupFlag
     */
    private $countryGroupFlag = null;

    /**
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToAxleIds($array)
    {
        $this->axleIds[] = $array;
        return $this;
    }

    /**
     * isset axleIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAxleIds($index)
    {
        return isset($this->axleIds[$index]);
    }

    /**
     * unset axleIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAxleIds($index)
    {
        unset($this->axleIds[$index]);
    }

    /**
     * Gets as axleIds
     *
     * @return int[]
     */
    public function getAxleIds()
    {
        return $this->axleIds;
    }

    /**
     * Sets a new axleIds
     *
     * @param int[] $axleIds
     * @return self
     */
    public function setAxleIds(array $axleIds)
    {
        $this->axleIds = $axleIds;
        return $this;
    }

    /**
     * Gets as bodyTypes
     *
     * @return bool
     */
    public function getBodyTypes()
    {
        return $this->bodyTypes;
    }

    /**
     * Sets a new bodyTypes
     *
     * @param bool $bodyTypes
     * @return self
     */
    public function setBodyTypes($bodyTypes)
    {
        $this->bodyTypes = $bodyTypes;
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

