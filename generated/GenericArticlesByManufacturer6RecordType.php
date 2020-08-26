<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing GenericArticlesByManufacturer6RecordType
 *
 * 
 * XSD Type: genericArticlesByManufacturer6Record
 */
class GenericArticlesByManufacturer6RecordType extends GenericArticlesByManufacturer6RecordSrcType
{

    /**
     * @var string $articleNormName
     */
    private $articleNormName = null;

    /**
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * @var int $brandNo
     */
    private $brandNo = null;

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * Gets as articleNormName
     *
     * @return string
     */
    public function getArticleNormName()
    {
        return $this->articleNormName;
    }

    /**
     * Sets a new articleNormName
     *
     * @param string $articleNormName
     * @return self
     */
    public function setArticleNormName($articleNormName)
    {
        $this->articleNormName = $articleNormName;
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

    /**
     * Gets as brandNo
     *
     * @return int
     */
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Sets a new brandNo
     *
     * @param int $brandNo
     * @return self
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
        return $this;
    }

    /**
     * Gets as genericArticleId
     *
     * @return int
     */
    public function getGenericArticleId()
    {
        return $this->genericArticleId;
    }

    /**
     * Sets a new genericArticleId
     *
     * @param int $genericArticleId
     * @return self
     */
    public function setGenericArticleId($genericArticleId)
    {
        $this->genericArticleId = $genericArticleId;
        return $this;
    }


}

