<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AxleByCarIdRecordType
 *
 * 
 * XSD Type: axleByCarIdRecord
 */
class AxleByCarIdRecordType extends AxleByCarIdRecordSrcType
{

    /**
     * @var string $axleDescription
     */
    private $axleDescription = null;

    /**
     * @var string $axleManufacturer
     */
    private $axleManufacturer = null;

    /**
     * @var string $axleModel
     */
    private $axleModel = null;

    /**
     * @var string $axlePosition
     */
    private $axlePosition = null;

    /**
     * Gets as axleDescription
     *
     * @return string
     */
    public function getAxleDescription()
    {
        return $this->axleDescription;
    }

    /**
     * Sets a new axleDescription
     *
     * @param string $axleDescription
     * @return self
     */
    public function setAxleDescription($axleDescription)
    {
        $this->axleDescription = $axleDescription;
        return $this;
    }

    /**
     * Gets as axleManufacturer
     *
     * @return string
     */
    public function getAxleManufacturer()
    {
        return $this->axleManufacturer;
    }

    /**
     * Sets a new axleManufacturer
     *
     * @param string $axleManufacturer
     * @return self
     */
    public function setAxleManufacturer($axleManufacturer)
    {
        $this->axleManufacturer = $axleManufacturer;
        return $this;
    }

    /**
     * Gets as axleModel
     *
     * @return string
     */
    public function getAxleModel()
    {
        return $this->axleModel;
    }

    /**
     * Sets a new axleModel
     *
     * @param string $axleModel
     * @return self
     */
    public function setAxleModel($axleModel)
    {
        $this->axleModel = $axleModel;
        return $this;
    }

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


}

