<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleIdsByMarkRecordType
 *
 * 
 * XSD Type: vehicleIdsByMarkRecord
 */
class VehicleIdsByMarkRecordType extends VehicleIdsByMarkRecordSrcType
{

    /**
     * @var int $carId
     */
    private $carId = null;

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

