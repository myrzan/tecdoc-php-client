<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing AxleByIds3
 *
 * 
 * XSD Type: axleByIds3Record
 */
class AxleByIds3 
{

    /**
     * @var AxleDetailsById2 $axleDetails2
     */
    private $axleDetails2 = null;

    /**
     * @var int $axleId
     */
    private $axleId = null;

    /**
     * @var AxleKeyNumbers[] $bodyType
     */
    private $bodyType = null;

    /**
     * Gets as axleDetails2
     *
     * @return AxleDetailsById2
     */
    public function getAxleDetails2()
    {
        return $this->axleDetails2;
    }

    /**
     * Sets a new axleDetails2
     *
     * @param AxleDetailsById2 $axleDetails2
     * @return self
     */
    public function setAxleDetails2(AxleDetailsById2 $axleDetails2)
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

