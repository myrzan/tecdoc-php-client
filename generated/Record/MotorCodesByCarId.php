<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MotorCodesByCarId
 *
 * 
 * XSD Type: motorCodesByCarIdRecord
 */
class MotorCodesByCarId
{

    /**
     * @var string $motorCode
     */
    private $motorCode = null;

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


}

