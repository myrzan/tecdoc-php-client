<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticlePartList
 *
 * 
 * XSD Type: articlePartListRecord
 */
class ArticlePartList
{

    /**
     * @var CsgDocumentDataByArticleId2[] $csgDocumentData
     */
    private $csgDocumentData = null;

    /**
     * @var ArticlePartList3[] $partlistInfo
     */
    private $partlistInfo = null;

    /**
     * Adds as array
     *
     * @param CsgDocumentDataByArticleId2 $array
     * @return self
     */
    public function addToCsgDocumentData(CsgDocumentDataByArticleId2 $array)
    {
        $this->csgDocumentData[] = $array;
        return $this;
    }

    /**
     * isset csgDocumentData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCsgDocumentData($index)
    {
        return isset($this->csgDocumentData[$index]);
    }

    /**
     * unset csgDocumentData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCsgDocumentData($index)
    {
        unset($this->csgDocumentData[$index]);
    }

    /**
     * Gets as csgDocumentData
     *
     * @return CsgDocumentDataByArticleId2[]
     */
    public function getCsgDocumentData()
    {
        return $this->csgDocumentData;
    }

    /**
     * Sets a new csgDocumentData
     *
     * @param CsgDocumentDataByArticleId2[] $csgDocumentData
     * @return self
     */
    public function setCsgDocumentData(array $csgDocumentData)
    {
        $this->csgDocumentData = $csgDocumentData;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param ArticlePartList3 $array
     * @return self
     */
    public function addToPartlistInfo(ArticlePartList3 $array)
    {
        $this->partlistInfo[] = $array;
        return $this;
    }

    /**
     * isset partlistInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartlistInfo($index)
    {
        return isset($this->partlistInfo[$index]);
    }

    /**
     * unset partlistInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartlistInfo($index)
    {
        unset($this->partlistInfo[$index]);
    }

    /**
     * Gets as partlistInfo
     *
     * @return ArticlePartList3[]
     */
    public function getPartlistInfo()
    {
        return $this->partlistInfo;
    }

    /**
     * Sets a new partlistInfo
     *
     * @param ArticlePartList3[] $partlistInfo
     * @return self
     */
    public function setPartlistInfo(array $partlistInfo)
    {
        $this->partlistInfo = $partlistInfo;
        return $this;
    }


}

