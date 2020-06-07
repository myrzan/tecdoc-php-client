<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorByIds3RecordType
 *
 * 
 * XSD Type: motorByIds3Record
 */
class MotorByIds3RecordType extends MotorByIds3RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\MotorDetails2RecordType $motorDetails2
     */
    private $motorDetails2 = null;

    /**
     * @var int $motorId
     */
    private $motorId = null;

    /**
     * Gets as motorDetails2
     *
     * @return \Baumeister\TecDocClient\Generated\MotorDetails2RecordType
     */
    public function getMotorDetails2()
    {
        return $this->motorDetails2;
    }

    /**
     * Sets a new motorDetails2
     *
     * @param \Baumeister\TecDocClient\Generated\MotorDetails2RecordType $motorDetails2
     * @return self
     */
    public function setMotorDetails2(\Baumeister\TecDocClient\Generated\MotorDetails2RecordType $motorDetails2)
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

