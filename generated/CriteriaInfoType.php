<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CriteriaInfoType
 *
 * 
 * XSD Type: CriteriaInfo
 */
class CriteriaInfoType
{

    /**
     * @var int $criteriaId
     */
    private $criteriaId = null;

    /**
     * @var string $criteriaDescription
     */
    private $criteriaDescription = null;

    /**
     * @var string $criteriaAbbrDescription
     */
    private $criteriaAbbrDescription = null;

    /**
     * @var string $criteriaUnitDescription
     */
    private $criteriaUnitDescription = null;

    /**
     * @var string $criteriaType
     */
    private $criteriaType = null;

    /**
     * @var int $successorCriteriaId
     */
    private $successorCriteriaId = null;

    /**
     * @var bool $isMandatory
     */
    private $isMandatory = null;

    /**
     * @var bool $isInterval
     */
    private $isInterval = null;

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
     * Gets as criteriaDescription
     *
     * @return string
     */
    public function getCriteriaDescription()
    {
        return $this->criteriaDescription;
    }

    /**
     * Sets a new criteriaDescription
     *
     * @param string $criteriaDescription
     * @return self
     */
    public function setCriteriaDescription($criteriaDescription)
    {
        $this->criteriaDescription = $criteriaDescription;
        return $this;
    }

    /**
     * Gets as criteriaAbbrDescription
     *
     * @return string
     */
    public function getCriteriaAbbrDescription()
    {
        return $this->criteriaAbbrDescription;
    }

    /**
     * Sets a new criteriaAbbrDescription
     *
     * @param string $criteriaAbbrDescription
     * @return self
     */
    public function setCriteriaAbbrDescription($criteriaAbbrDescription)
    {
        $this->criteriaAbbrDescription = $criteriaAbbrDescription;
        return $this;
    }

    /**
     * Gets as criteriaUnitDescription
     *
     * @return string
     */
    public function getCriteriaUnitDescription()
    {
        return $this->criteriaUnitDescription;
    }

    /**
     * Sets a new criteriaUnitDescription
     *
     * @param string $criteriaUnitDescription
     * @return self
     */
    public function setCriteriaUnitDescription($criteriaUnitDescription)
    {
        $this->criteriaUnitDescription = $criteriaUnitDescription;
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
     * Gets as successorCriteriaId
     *
     * @return int
     */
    public function getSuccessorCriteriaId()
    {
        return $this->successorCriteriaId;
    }

    /**
     * Sets a new successorCriteriaId
     *
     * @param int $successorCriteriaId
     * @return self
     */
    public function setSuccessorCriteriaId($successorCriteriaId)
    {
        $this->successorCriteriaId = $successorCriteriaId;
        return $this;
    }

    /**
     * Gets as isMandatory
     *
     * @return bool
     */
    public function getIsMandatory()
    {
        return $this->isMandatory;
    }

    /**
     * Sets a new isMandatory
     *
     * @param bool $isMandatory
     * @return self
     */
    public function setIsMandatory($isMandatory)
    {
        $this->isMandatory = $isMandatory;
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


}

