<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleLinkedAllLinkingTargetManufacturer2RecordType
 *
 * 
 * XSD Type: articleLinkedAllLinkingTargetManufacturer2Record
 */
class ArticleLinkedAllLinkingTargetManufacturer2RecordType extends ArticleLinkedAllLinkingTargetManufacturer2RecordSrcType
{

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

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

