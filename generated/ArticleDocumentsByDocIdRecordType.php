<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleDocumentsByDocIdRecordType
 *
 * 
 * XSD Type: articleDocumentsByDocIdRecord
 */
class ArticleDocumentsByDocIdRecordType extends ArticleDocumentsByDocIdRecordSrcType
{

    /**
     * @var string $docFileType
     */
    private $docFileType = null;

    /**
     * @var string $docId
     */
    private $docId = null;

    /**
     * Gets as docFileType
     *
     * @return string
     */
    public function getDocFileType()
    {
        return $this->docFileType;
    }

    /**
     * Sets a new docFileType
     *
     * @param string $docFileType
     * @return self
     */
    public function setDocFileType($docFileType)
    {
        $this->docFileType = $docFileType;
        return $this;
    }

    /**
     * Gets as docId
     *
     * @return string
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Sets a new docId
     *
     * @param string $docId
     * @return self
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
        return $this;
    }


}

