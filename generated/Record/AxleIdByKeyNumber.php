<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing AxleIdByKeyNumber
 *
 * 
 * XSD Type: axleIdByKeyNumberRecord
 */
class AxleIdByKeyNumber 
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

