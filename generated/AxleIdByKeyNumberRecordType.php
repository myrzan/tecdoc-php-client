<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AxleIdByKeyNumberRecordType
 *
 * 
 * XSD Type: axleIdByKeyNumberRecord
 */
class AxleIdByKeyNumberRecordType extends AxleIdByKeyNumberRecordSrcType
{

    /**
     * @var int $axleId
     */
    private $axleId = null;

    /**
     * Gets as axleId
     *
     * @return int
     */
    public function getAxleId()
    {
        return $this->axleId;
    }

    /**
     * Sets a new axleId
     *
     * @param int $axleId
     * @return self
     */
    public function setAxleId($axleId)
    {
        $this->axleId = $axleId;
        return $this;
    }


}

