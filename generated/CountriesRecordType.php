<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing CountriesRecordType
 *
 * 
 * XSD Type: countriesRecord
 */
class CountriesRecordType extends CountriesRecordSrcType
{

    /**
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * @var string $countryName
     */
    private $countryName = null;

    /**
     * @var int $usage
     */
    private $usage = null;

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * @param int $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }


}

