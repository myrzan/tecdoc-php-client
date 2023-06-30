<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing AxleKeyNumbers
 *
 * 
 * XSD Type: axleKeyNumbersRecord
 */
class AxleKeyNumbers 
{

    /**
     * @var string $bodyTypeName
     */
    private $bodyTypeName = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

    /**
     * Gets as bodyTypeName
     *
     * @return string
     */
    public function getBodyTypeName()
    {
        return $this->bodyTypeName;
    }

    /**
     * Sets a new bodyTypeName
     *
     * @param string $bodyTypeName
     * @return self
     */
    public function setBodyTypeName($bodyTypeName)
    {
        $this->bodyTypeName = $bodyTypeName;
        return $this;
    }

    /**
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
        return $this;
    }

    /**
     * Gets as manuName
     *
     * @return string
     */
    public function getManuName()
    {
        return $this->manuName;
    }

    /**
     * Sets a new manuName
     *
     * @param string $manuName
     * @return self
     */
    public function setManuName($manuName)
    {
        $this->manuName = $manuName;
        return $this;
    }


}

