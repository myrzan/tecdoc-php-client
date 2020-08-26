<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AxleByIds2RecordType
 *
 * 
 * XSD Type: axleByIds2Record
 */
class AxleByIds2RecordType extends AxleByIds2RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\AxleByIdRecordType $axleDetails
     */
    private $axleDetails = null;

    /**
     * @var int $axleId
     */
    private $axleId = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\AxleKeyNumbersRecordType[] $bodyType
     */
    private $bodyType = null;

    /**
     * Gets as axleDetails
     *
     * @return \Myrzan\TecDocClient\Generated\AxleByIdRecordType
     */
    public function getAxleDetails()
    {
        return $this->axleDetails;
    }

    /**
     * Sets a new axleDetails
     *
     * @param \Myrzan\TecDocClient\Generated\AxleByIdRecordType $axleDetails
     * @return self
     */
    public function setAxleDetails(\Myrzan\TecDocClient\Generated\AxleByIdRecordType $axleDetails)
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
     * @return self
     * @param \Myrzan\TecDocClient\Generated\AxleKeyNumbersRecordType $array
     */
    public function addToBodyType(\Myrzan\TecDocClient\Generated\AxleKeyNumbersRecordType $array)
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
     * @return \Myrzan\TecDocClient\Generated\AxleKeyNumbersRecordType[]
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Sets a new bodyType
     *
     * @param \Myrzan\TecDocClient\Generated\AxleKeyNumbersRecordType[] $bodyType
     * @return self
     */
    public function setBodyType(array $bodyType)
    {
        $this->bodyType = $bodyType;
        return $this;
    }


}

