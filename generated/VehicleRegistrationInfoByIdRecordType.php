<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleRegistrationInfoByIdRecordType
 *
 * 
 * XSD Type: vehicleRegistrationInfoByIdRecord
 */
class VehicleRegistrationInfoByIdRecordType extends VehicleRegistrationInfoByIdRecordSrcType
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

