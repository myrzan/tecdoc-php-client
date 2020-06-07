<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing UsageNumbers2RecordType
 *
 * 
 * XSD Type: usageNumbers2Record
 */
class UsageNumbers2RecordType extends UsageNumbers2RecordSrcType
{

    /**
     * @var bool $displayImmediate
     */
    private $displayImmediate = null;

    /**
     * @var string $usageNumber
     */
    private $usageNumber = null;

    /**
     * Gets as displayImmediate
     *
     * @return bool
     */
    public function getDisplayImmediate()
    {
        return $this->displayImmediate;
    }

    /**
     * Sets a new displayImmediate
     *
     * @param bool $displayImmediate
     * @return self
     */
    public function setDisplayImmediate($displayImmediate)
    {
        $this->displayImmediate = $displayImmediate;
        return $this;
    }

    /**
     * Gets as usageNumber
     *
     * @return string
     */
    public function getUsageNumber()
    {
        return $this->usageNumber;
    }

    /**
     * Sets a new usageNumber
     *
     * @param string $usageNumber
     * @return self
     */
    public function setUsageNumber($usageNumber)
    {
        $this->usageNumber = $usageNumber;
        return $this;
    }


}

