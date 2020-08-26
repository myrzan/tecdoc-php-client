<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AttributeType
 *
 * 
 * XSD Type: attribute
 */
class AttributeType extends AttributeSrcType
{

    /**
     * @var int $attributeId
     */
    private $attributeId = null;

    /**
     * @var string $attributeName
     */
    private $attributeName = null;

    /**
     * @var string $attributeShortName
     */
    private $attributeShortName = null;

    /**
     * @var string $attributeType
     */
    private $attributeType = null;

    /**
     * @var string $attributeUnit
     */
    private $attributeUnit = null;

    /**
     * @var bool $dutyFlag
     */
    private $dutyFlag = null;

    /**
     * @var bool $interval
     */
    private $interval = null;

    /**
     * @var int $successorId
     */
    private $successorId = null;

    /**
     * Gets as attributeId
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * Sets a new attributeId
     *
     * @param int $attributeId
     * @return self
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;
        return $this;
    }

    /**
     * Gets as attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Sets a new attributeName
     *
     * @param string $attributeName
     * @return self
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        return $this;
    }

    /**
     * Gets as attributeShortName
     *
     * @return string
     */
    public function getAttributeShortName()
    {
        return $this->attributeShortName;
    }

    /**
     * Sets a new attributeShortName
     *
     * @param string $attributeShortName
     * @return self
     */
    public function setAttributeShortName($attributeShortName)
    {
        $this->attributeShortName = $attributeShortName;
        return $this;
    }

    /**
     * Gets as attributeType
     *
     * @return string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**
     * Sets a new attributeType
     *
     * @param string $attributeType
     * @return self
     */
    public function setAttributeType($attributeType)
    {
        $this->attributeType = $attributeType;
        return $this;
    }

    /**
     * Gets as attributeUnit
     *
     * @return string
     */
    public function getAttributeUnit()
    {
        return $this->attributeUnit;
    }

    /**
     * Sets a new attributeUnit
     *
     * @param string $attributeUnit
     * @return self
     */
    public function setAttributeUnit($attributeUnit)
    {
        $this->attributeUnit = $attributeUnit;
        return $this;
    }

    /**
     * Gets as dutyFlag
     *
     * @return bool
     */
    public function getDutyFlag()
    {
        return $this->dutyFlag;
    }

    /**
     * Sets a new dutyFlag
     *
     * @param bool $dutyFlag
     * @return self
     */
    public function setDutyFlag($dutyFlag)
    {
        $this->dutyFlag = $dutyFlag;
        return $this;
    }

    /**
     * Gets as interval
     *
     * @return bool
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * @param bool $interval
     * @return self
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Gets as successorId
     *
     * @return int
     */
    public function getSuccessorId()
    {
        return $this->successorId;
    }

    /**
     * Sets a new successorId
     *
     * @param int $successorId
     * @return self
     */
    public function setSuccessorId($successorId)
    {
        $this->successorId = $successorId;
        return $this;
    }


}

