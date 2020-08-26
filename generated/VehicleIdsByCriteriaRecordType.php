<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleIdsByCriteriaRecordType
 *
 * 
 * XSD Type: vehicleIdsByCriteriaRecord
 */
class VehicleIdsByCriteriaRecordType extends VehicleIdsByCriteriaRecordSrcType
{

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var string $carName
     */
    private $carName = null;

    /**
     * @var string $carType
     */
    private $carType = null;

    /**
     * @var string $firstCountry
     */
    private $firstCountry = null;

    /**
     * Gets as carId
     *
     * @return int
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Sets a new carId
     *
     * @param int $carId
     * @return self
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
        return $this;
    }

    /**
     * Gets as carName
     *
     * @return string
     */
    public function getCarName()
    {
        return $this->carName;
    }

    /**
     * Sets a new carName
     *
     * @param string $carName
     * @return self
     */
    public function setCarName($carName)
    {
        $this->carName = $carName;
        return $this;
    }

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
     * Gets as firstCountry
     *
     * @return string
     */
    public function getFirstCountry()
    {
        return $this->firstCountry;
    }

    /**
     * Sets a new firstCountry
     *
     * @param string $firstCountry
     * @return self
     */
    public function setFirstCountry($firstCountry)
    {
        $this->firstCountry = $firstCountry;
        return $this;
    }


}

