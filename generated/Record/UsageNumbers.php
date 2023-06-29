<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing UsageNumbers
 *
 * 
 * XSD Type: usageNumbersRecord
 */
class UsageNumbers
{

    /**
     * @var string $usageNumber
     */
    private $usageNumber = null;

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

