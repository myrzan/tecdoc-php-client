<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MotorByIds2
 *
 * 
 * XSD Type: motorByIds2Record
 */
class MotorByIds2 
{

    /**
     * @var MotorById $motorDetails
     */
    private $motorDetails = null;

    /**
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * Gets as motorDetails
     *
     * @return MotorById
     */
    public function getMotorDetails()
    {
        return $this->motorDetails;
    }

    /**
     * Sets a new motorDetails
     *
     * @param MotorById $motorDetails
     * @return self
     */
    public function setMotorDetails(MotorById $motorDetails)
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

