<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing AxleByIds2
 *
 * 
 * XSD Type: axleByIds2Record
 */
class AxleByIds2 
{

    /**
     * @var AxleById $axleDetails
     */
    private $axleDetails = null;

    /**
     * @var int $axleId
     */
    private $axleId = null;

    /**
     * @var AxleKeyNumbers[] $bodyType
     */
    private $bodyType = null;

    /**
     * Gets as axleDetails
     *
     * @return AxleById
     */
    public function getAxleDetails()
    {
        return $this->axleDetails;
    }

    /**
     * Sets a new axleDetails
     *
     * @param AxleById $axleDetails
     * @return self
     */
    public function setAxleDetails(AxleById $axleDetails)
    {
        $this->axleDetails = $axleDetails;
        return $this;
    }

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

    /**
     * Adds as array
     *
     * @param AxleKeyNumbers $array
     * @return self
     */
    public function addToBodyType(AxleKeyNumbers $array)
    {
        $this->bodyType[] = $array;
        return $this;
    }

    /**
     * isset bodyType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodyType($index)
    {
        return isset($this->bodyType[$index]);
    }

    /**
     * unset bodyType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodyType($index)
    {
        unset($this->bodyType[$index]);
    }

    /**
     * Gets as bodyType
     *
     * @return AxleKeyNumbers[]
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Sets a new bodyType
     *
     * @param AxleKeyNumbers[] $bodyType
     * @return self
     */
    public function setBodyType(array $bodyType)
    {
        $this->bodyType = $bodyType;
        return $this;
    }


}

