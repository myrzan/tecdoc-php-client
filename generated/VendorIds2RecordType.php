<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VendorIds2RecordType
 *
 * 
 * XSD Type: vendorIds2Record
 */
class VendorIds2RecordType extends VendorIds2RecordSrcType
{

    /**
     * @var int $linkedArticles
     */
    private $linkedArticles = null;

    /**
     * @var int $linkedCars
     */
    private $linkedCars = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

    /**
     * @var int $markId
     */
    private $markId = null;

    /**
     * @var string $vendorName
     */
    private $vendorName = null;

    /**
     * Gets as linkedArticles
     *
     * @return int
     */
    public function getLinkedArticles()
    {
        return $this->linkedArticles;
    }

    /**
     * Sets a new linkedArticles
     *
     * @param int $linkedArticles
     * @return self
     */
    public function setLinkedArticles($linkedArticles)
    {
        $this->linkedArticles = $linkedArticles;
        return $this;
    }

    /**
     * Gets as linkedCars
     *
     * @return int
     */
    public function getLinkedCars()
    {
        return $this->linkedCars;
    }

    /**
     * Sets a new linkedCars
     *
     * @param int $linkedCars
     * @return self
     */
    public function setLinkedCars($linkedCars)
    {
        $this->linkedCars = $linkedCars;
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

    /**
     * Gets as markId
     *
     * @return int
     */
    public function getMarkId()
    {
        return $this->markId;
    }

    /**
     * Sets a new markId
     *
     * @param int $markId
     * @return self
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;
        return $this;
    }

    /**
     * Gets as vendorName
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Sets a new vendorName
     *
     * @param string $vendorName
     * @return self
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
        return $this;
    }


}

