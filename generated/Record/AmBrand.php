<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing AmBrands
 *
 * 
 * XSD Type: amBrandsRecord
 */
class AmBrand
{

    /**
     * @var int $brandId
     */
    private $brandId = null;

    /**
     * @var string $brandLogoID
     */
    private $brandLogoID = null;

    /**
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * Gets as brandId
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Sets a new brandId
     *
     * @param int $brandId
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * Gets as brandLogoID
     *
     * @return string
     */
    public function getBrandLogoID()
    {
        return $this->brandLogoID;
    }

    /**
     * Sets a new brandLogoID
     *
     * @param string $brandLogoID
     * @return self
     */
    public function setBrandLogoID($brandLogoID)
    {
        $this->brandLogoID = $brandLogoID;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }


}

