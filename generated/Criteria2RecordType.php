<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing Criteria2RecordType
 *
 * 
 * XSD Type: criteria2Record
 */
class Criteria2RecordType extends Criteria2RecordSrcType
{

    /**
     * @var int $criteriaId
     */
    private $criteriaId = null;

    /**
     * @var string $criteriaName
     */
    private $criteriaName = null;

    /**
     * @var string $criteriaShortName
     */
    private $criteriaShortName = null;

    /**
     * @var string $criteriaType
     */
    private $criteriaType = null;

    /**
     * @var string $criteriaUnit
     */
    private $criteriaUnit = null;

    /**
     * @var bool $isInterval
     */
    private $isInterval = null;

    /**
     * @var int $successorId
     */
    private $successorId = null;

    /**
     * Gets as criteriaId
     *
     * @return int
     */
    public function getCriteriaId()
    {
        return $this->criteriaId;
    }

    /**
     * Sets a new criteriaId
     *
     * @param int $criteriaId
     * @return self
     */
    public function setCriteriaId($criteriaId)
    {
        $this->criteriaId = $criteriaId;
        return $this;
    }

    /**
     * Gets as criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Sets a new criteriaName
     *
     * @param string $criteriaName
     * @return self
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * Gets as criteriaShortName
     *
     * @return string
     */
    public function getCriteriaShortName()
    {
        return $this->criteriaShortName;
    }

    /**
     * Sets a new criteriaShortName
     *
     * @param string $criteriaShortName
     * @return self
     */
    public function setCriteriaShortName($criteriaShortName)
    {
        $this->criteriaShortName = $criteriaShortName;
        return $this;
    }

    /**
     * Gets as criteriaType
     *
     * @return string
     */
    public function getCriteriaType()
    {
        return $this->criteriaType;
    }

    /**
     * Sets a new criteriaType
     *
     * @param string $criteriaType
     * @return self
     */
    public function setCriteriaType($criteriaType)
    {
        $this->criteriaType = $criteriaType;
        return $this;
    }

    /**
     * Gets as criteriaUnit
     *
     * @return string
     */
    public function getCriteriaUnit()
    {
        return $this->criteriaUnit;
    }

    /**
     * Sets a new criteriaUnit
     *
     * @param string $criteriaUnit
     * @return self
     */
    public function setCriteriaUnit($criteriaUnit)
    {
        $this->criteriaUnit = $criteriaUnit;
        return $this;
    }

    /**
     * Gets as isInterval
     *
     * @return bool
     */
    public function getIsInterval()
    {
        return $this->isInterval;
    }

    /**
     * Sets a new isInterval
     *
     * @param bool $isInterval
     * @return self
     */
    public function setIsInterval($isInterval)
    {
        $this->isInterval = $isInterval;
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

