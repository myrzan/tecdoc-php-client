<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing NewArticleBrandsRecordType
 *
 * 
 * XSD Type: newArticleBrandsRecord
 */
class NewArticleBrandsRecordType extends NewArticleBrandsRecordSrcType
{

    /**
     * @var int $brandId
     */
    private $brandId = null;

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

