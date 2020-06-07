<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticlePartListRecordType
 *
 * 
 * XSD Type: articlePartListRecord
 */
class ArticlePartListRecordType extends ArticlePartListRecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\CsgDocumentDataByArticleId2RecordType[] $csgDocumentData
     */
    private $csgDocumentData = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticlePartList3RecordType[] $partlistInfo
     */
    private $partlistInfo = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\CsgDocumentDataByArticleId2RecordType $array
     */
    public function addToCsgDocumentData(\Baumeister\TecDocClient\Generated\CsgDocumentDataByArticleId2RecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\CsgDocumentDataByArticleId2RecordType[]
     */
    public function getCsgDocumentData()
    {
        return $this->csgDocumentData;
    }

    /**
     * Sets a new csgDocumentData
     *
     * @param \Baumeister\TecDocClient\Generated\CsgDocumentDataByArticleId2RecordType[] $csgDocumentData
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticlePartList3RecordType $array
     */
    public function addToPartlistInfo(\Baumeister\TecDocClient\Generated\ArticlePartList3RecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ArticlePartList3RecordType[]
     */
    public function getPartlistInfo()
    {
        return $this->partlistInfo;
    }

    /**
     * Sets a new partlistInfo
     *
     * @param \Baumeister\TecDocClient\Generated\ArticlePartList3RecordType[] $partlistInfo
     * @return self
     */
    public function setPartlistInfo(array $partlistInfo)
    {
        $this->partlistInfo = $partlistInfo;
        return $this;
    }


}

