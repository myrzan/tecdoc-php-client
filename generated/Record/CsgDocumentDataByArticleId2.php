<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\ArticleDocumentsByDocId;

/**
 * Class representing CsgDocumentDataByArticleId2
 *
 * 
 * XSD Type: csgDocumentDataByArticleId2Record
 */
class CsgDocumentDataByArticleId2 
{

    /**
     * @var ArticleDocumentsByDocId $articleDoc
     */
    private $articleDoc = null;

    /**
     * @var CoordinatesByArticleDocument[] $coSeq
     */
    private $coSeq = null;

    /**
     * Gets as articleDoc
     *
     * @return ArticleDocumentsByDocId
     */
    public function getArticleDoc()
    {
        return $this->articleDoc;
    }

    /**
     * Sets a new articleDoc
     *
     * @param ArticleDocumentsByDocId $articleDoc
     * @return self
     */
    public function setArticleDoc(ArticleDocumentsByDocId $articleDoc)
    {
        $this->articleDoc = $articleDoc;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param CoordinatesByArticleDocument $array
     * @return self
     */
    public function addToCoSeq(CoordinatesByArticleDocument $array)
    {
        $this->coSeq[] = $array;
        return $this;
    }

    /**
     * isset coSeq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoSeq($index)
    {
        return isset($this->coSeq[$index]);
    }

    /**
     * unset coSeq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoSeq($index)
    {
        unset($this->coSeq[$index]);
    }

    /**
     * Gets as coSeq
     *
     * @return CoordinatesByArticleDocument[]
     */
    public function getCoSeq()
    {
        return $this->coSeq;
    }

    /**
     * Sets a new coSeq
     *
     * @param CoordinatesByArticleDocument[] $coSeq
     * @return self
     */
    public function setCoSeq(array $coSeq)
    {
        $this->coSeq = $coSeq;
        return $this;
    }


}

