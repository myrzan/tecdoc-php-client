<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorByIds2RecordType
 *
 * 
 * XSD Type: motorByIds2Record
 */
class MotorByIds2RecordType extends MotorByIds2RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\MotorByIdRecordType $motorDetails
     */
    private $motorDetails = null;

    /**
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * Gets as motorDetails
     *
     * @return \Baumeister\TecDocClient\Generated\MotorByIdRecordType
     */
    public function getMotorDetails()
    {
        return $this->motorDetails;
    }

    /**
     * Sets a new motorDetails
     *
     * @param \Baumeister\TecDocClient\Generated\MotorByIdRecordType $motorDetails
     * @return self
     */
    public function setMotorDetails(\Baumeister\TecDocClient\Generated\MotorByIdRecordType $motorDetails)
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

