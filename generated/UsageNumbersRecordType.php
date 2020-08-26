<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing UsageNumbersRecordType
 *
 * 
 * XSD Type: usageNumbersRecord
 */
class UsageNumbersRecordType extends UsageNumbersRecordSrcType
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

