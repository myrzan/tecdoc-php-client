<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MotorByIds3
 *
 * 
 * XSD Type: motorByIds3Record
 */
class MotorByIds3
{

    /**
     * @var MotorDetails2 $motorDetails2
     */
    private $motorDetails2 = null;

    /**
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * Gets as motorDetails2
     *
     * @return MotorDetails2
     */
    public function getMotorDetails2()
    {
        return $this->motorDetails2;
    }

    /**
     * Sets a new motorDetails2
     *
     * @param MotorDetails2 $motorDetails2
     * @return self
     */
    public function setMotorDetails2(MotorDetails2 $motorDetails2)
    {
        $this->motorDetails2 = $motorDetails2;
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

