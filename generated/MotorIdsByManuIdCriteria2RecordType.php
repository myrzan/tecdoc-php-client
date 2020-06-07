<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorIdsByManuIdCriteria2RecordType
 *
 * 
 * XSD Type: motorIdsByManuIdCriteria2Record
 */
class MotorIdsByManuIdCriteria2RecordType extends MotorIdsByManuIdCriteria2RecordSrcType
{

    /**
     * @var int $motorId
     */
    private $motorId = null;

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

