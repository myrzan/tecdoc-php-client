<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleIdsByVendorId2RecordType
 *
 * 
 * XSD Type: vehicleIdsByVendorId2Record
 */
class VehicleIdsByVendorId2RecordType extends VehicleIdsByVendorId2RecordSrcType
{

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var string $firstCountry
     */
    private $firstCountry = null;

    /**
     * @var string $term
     */
    private $term = null;

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

    /**
     * Gets as term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * @param string $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }


}

