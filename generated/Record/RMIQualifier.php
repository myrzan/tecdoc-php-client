<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing RMIQualifierType
 *
 * 
 * XSD Type: RMIQualifier
 */
class RMIQualifier
{

    /**
     * @var int $qualifierId
     */
    private $qualifierId = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as qualifierId
     *
     * @return int
     */
    public function getQualifierId()
    {
        return $this->qualifierId;
    }

    /**
     * Sets a new qualifierId
     *
     * @param int $qualifierId
     * @return self
     */
    public function setQualifierId($qualifierId)
    {
        $this->qualifierId = $qualifierId;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

