<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing VehicleRegistrationInfoById
 *
 *
 * XSD Type: vehicleRegistrationInfoByIdRecord
 */
class VehicleRegistrationInfoById
{

    /**
     * @var int $numberplateCount
     */
    private $numberplateCount = null;

    /**
     * Gets as numberplateCount
     *
     * @return int
     */
    public function getNumberplateCount()
    {
        return $this->numberplateCount;
    }

    /**
     * Sets a new numberplateCount
     *
     * @param int $numberplateCount
     * @return self
     */
    public function setNumberplateCount($numberplateCount)
    {
        $this->numberplateCount = $numberplateCount;
        return $this;
    }


}

