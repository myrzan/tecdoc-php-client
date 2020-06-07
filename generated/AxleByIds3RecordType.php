<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AxleByIds3RecordType
 *
 * 
 * XSD Type: axleByIds3Record
 */
class AxleByIds3RecordType extends AxleByIds3RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\AxleDetailsById2RecordType $axleDetails2
     */
    private $axleDetails2 = null;

    /**
     * @var int $axleId
     */
    private $axleId = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AxleKeyNumbersRecordType[] $bodyType
     */
    private $bodyType = null;

    /**
     * Gets as axleDetails2
     *
     * @return \Baumeister\TecDocClient\Generated\AxleDetailsById2RecordType
     */
    public function getAxleDetails2()
    {
        return $this->axleDetails2;
    }

    /**
     * Sets a new axleDetails2
     *
     * @param \Baumeister\TecDocClient\Generated\AxleDetailsById2RecordType $axleDetails2
     * @return self
     */
    public function setAxleDetails2(\Baumeister\TecDocClient\Generated\AxleDetailsById2RecordType $axleDetails2)
    {
        $this->axleDetails2 = $axleDetails2;
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
     * @param \Baumeister\TecDocClient\Generated\AxleKeyNumbersRecordType $array
     */
    public function addToBodyType(\Baumeister\TecDocClient\Generated\AxleKeyNumbersRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\AxleKeyNumbersRecordType[]
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Sets a new bodyType
     *
     * @param \Baumeister\TecDocClient\Generated\AxleKeyNumbersRecordType[] $bodyType
     * @return self
     */
    public function setBodyType(array $bodyType)
    {
        $this->bodyType = $bodyType;
        return $this;
    }


}

