<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorCodesByCarIdRecordType
 *
 * 
 * XSD Type: motorCodesByCarIdRecord
 */
class MotorCodesByCarIdRecordType extends MotorCodesByCarIdRecordSrcType
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

