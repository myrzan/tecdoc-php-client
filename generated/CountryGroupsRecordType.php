<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CountryGroupsRecordType
 *
 * 
 * XSD Type: countryGroupsRecord
 */
class CountryGroupsRecordType extends CountryGroupsRecordSrcType
{

    /**
     * @var string $countryName
     */
    private $countryName = null;

    /**
     * @var string $tecdocCode
     */
    private $tecdocCode = null;

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
     * Gets as tecdocCode
     *
     * @return string
     */
    public function getTecdocCode()
    {
        return $this->tecdocCode;
    }

    /**
     * Sets a new tecdocCode
     *
     * @param string $tecdocCode
     * @return self
     */
    public function setTecdocCode($tecdocCode)
    {
        $this->tecdocCode = $tecdocCode;
        return $this;
    }


}

