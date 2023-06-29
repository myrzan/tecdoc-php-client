<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing CriteriaFilterType
 *
 * 
 * XSD Type: CriteriaFilter
 */
class CriteriaFilter
{

    /**
     * @var int $criteriaId
     */
    private $criteriaId = null;

    /**
     * @var string $rawValue
     */
    private $rawValue = null;

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
     * Gets as rawValue
     *
     * @return string
     */
    public function getRawValue()
    {
        return $this->rawValue;
    }

    /**
     * Sets a new rawValue
     *
     * @param string $rawValue
     * @return self
     */
    public function setRawValue($rawValue)
    {
        $this->rawValue = $rawValue;
        return $this;
    }


}

