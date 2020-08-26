<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing MotorByIds2RecordType
 *
 * 
 * XSD Type: motorByIds2Record
 */
class MotorByIds2RecordType extends MotorByIds2RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\MotorByIdRecordType $motorDetails
     */
    private $motorDetails = null;

    /**
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * Gets as motorDetails
     *
     * @return \Myrzan\TecDocClient\Generated\MotorByIdRecordType
     */
    public function getMotorDetails()
    {
        return $this->motorDetails;
    }

    /**
     * Sets a new motorDetails
     *
     * @param \Myrzan\TecDocClient\Generated\MotorByIdRecordType $motorDetails
     * @return self
     */
    public function setMotorDetails(\Myrzan\TecDocClient\Generated\MotorByIdRecordType $motorDetails)
    {
        $this->motorDetails = $motorDetails;
        return $this;
    }

    /**
     * Gets as motorId
     *
     * @return int
     */
    public function getMotorId()
    {
        return $this->motorId;
    }

    /**
     * Sets a new motorId
     *
     * @param int $motorId
     * @return self
     */
    public function setMotorId($motorId)
    {
        $this->motorId = $motorId;
        return $this;
    }


}

