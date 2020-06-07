<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleOENumbersRecordType
 *
 * 
 * XSD Type: articleOENumbersRecord
 */
class ArticleOENumbersRecordType extends ArticleOENumbersRecordSrcType
{

    /**
     * @var int $blockNumber
     */
    private $blockNumber = null;

    /**
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * @var string $oeNumber
     */
    private $oeNumber = null;

    /**
     * @var int $sortNumber
     */
    private $sortNumber = null;

    /**
     * Gets as blockNumber
     *
     * @return int
     */
    public function getBlockNumber()
    {
        return $this->blockNumber;
    }

    /**
     * Sets a new blockNumber
     *
     * @param int $blockNumber
     * @return self
     */
    public function setBlockNumber($blockNumber)
    {
        $this->blockNumber = $blockNumber;
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
     * Gets as oeNumber
     *
     * @return string
     */
    public function getOeNumber()
    {
        return $this->oeNumber;
    }

    /**
     * Sets a new oeNumber
     *
     * @param string $oeNumber
     * @return self
     */
    public function setOeNumber($oeNumber)
    {
        $this->oeNumber = $oeNumber;
        return $this;
    }

    /**
     * Gets as sortNumber
     *
     * @return int
     */
    public function getSortNumber()
    {
        return $this->sortNumber;
    }

    /**
     * Sets a new sortNumber
     *
     * @param int $sortNumber
     * @return self
     */
    public function setSortNumber($sortNumber)
    {
        $this->sortNumber = $sortNumber;
        return $this;
    }


}

