<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing WheelBasesByCarIdRecordType
 *
 * 
 * XSD Type: wheelBasesByCarIdRecord
 */
class WheelBasesByCarIdRecordType extends WheelBasesByCarIdRecordSrcType
{

    /**
     * @var string $axlePosition
     */
    private $axlePosition = null;

    /**
     * @var int $wheelbase
     */
    private $wheelbase = null;

    /**
     * @var int $wheelbaseId
     */
    private $wheelbaseId = null;

    /**
     * Gets as axlePosition
     *
     * @return string
     */
    public function getAxlePosition()
    {
        return $this->axlePosition;
    }

    /**
     * Sets a new axlePosition
     *
     * @param string $axlePosition
     * @return self
     */
    public function setAxlePosition($axlePosition)
    {
        $this->axlePosition = $axlePosition;
        return $this;
    }

    /**
     * Gets as wheelbase
     *
     * @return int
     */
    public function getWheelbase()
    {
        return $this->wheelbase;
    }

    /**
     * Sets a new wheelbase
     *
     * @param int $wheelbase
     * @return self
     */
    public function setWheelbase($wheelbase)
    {
        $this->wheelbase = $wheelbase;
        return $this;
    }

    /**
     * Gets as wheelbaseId
     *
     * @return int
     */
    public function getWheelbaseId()
    {
        return $this->wheelbaseId;
    }

    /**
     * Sets a new wheelbaseId
     *
     * @param int $wheelbaseId
     * @return self
     */
    public function setWheelbaseId($wheelbaseId)
    {
        $this->wheelbaseId = $wheelbaseId;
        return $this;
    }


}

