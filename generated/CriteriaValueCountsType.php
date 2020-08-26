<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CriteriaValueCountsType
 *
 * 
 * XSD Type: CriteriaValueCounts
 */
class CriteriaValueCountsType
{

    /**
     * @var string $rawValue
     */
    private $rawValue = null;

    /**
     * @var string $formattedValue
     */
    private $formattedValue = null;

    /**
     * @var int $count
     */
    private $count = null;

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

    /**
     * Gets as formattedValue
     *
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formattedValue;
    }

    /**
     * Sets a new formattedValue
     *
     * @param string $formattedValue
     * @return self
     */
    public function setFormattedValue($formattedValue)
    {
        $this->formattedValue = $formattedValue;
        return $this;
    }

    /**
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

