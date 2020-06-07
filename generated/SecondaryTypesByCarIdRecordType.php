<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing SecondaryTypesByCarIdRecordType
 *
 * 
 * XSD Type: secondaryTypesByCarIdRecord
 */
class SecondaryTypesByCarIdRecordType extends SecondaryTypesByCarIdRecordSrcType
{

    /**
     * @var string $subTypeDescription
     */
    private $subTypeDescription = null;

    /**
     * @var int $subTypeId
     */
    private $subTypeId = null;

    /**
     * Gets as subTypeDescription
     *
     * @return string
     */
    public function getSubTypeDescription()
    {
        return $this->subTypeDescription;
    }

    /**
     * Sets a new subTypeDescription
     *
     * @param string $subTypeDescription
     * @return self
     */
    public function setSubTypeDescription($subTypeDescription)
    {
        $this->subTypeDescription = $subTypeDescription;
        return $this;
    }

    /**
     * Gets as subTypeId
     *
     * @return int
     */
    public function getSubTypeId()
    {
        return $this->subTypeId;
    }

    /**
     * Sets a new subTypeId
     *
     * @param int $subTypeId
     * @return self
     */
    public function setSubTypeId($subTypeId)
    {
        $this->subTypeId = $subTypeId;
        return $this;
    }


}

