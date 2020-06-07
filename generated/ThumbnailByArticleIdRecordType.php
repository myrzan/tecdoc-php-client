<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ThumbnailByArticleIdRecordType
 *
 * 
 * XSD Type: thumbnailByArticleIdRecord
 */
class ThumbnailByArticleIdRecordType extends ThumbnailByArticleIdRecordSrcType
{

    /**
     * @var string $thumbDocId
     */
    private $thumbDocId = null;

    /**
     * @var string $thumbFileName
     */
    private $thumbFileName = null;

    /**
     * @var int $thumbTypeId
     */
    private $thumbTypeId = null;

    /**
     * Gets as thumbDocId
     *
     * @return string
     */
    public function getThumbDocId()
    {
        return $this->thumbDocId;
    }

    /**
     * Sets a new thumbDocId
     *
     * @param string $thumbDocId
     * @return self
     */
    public function setThumbDocId($thumbDocId)
    {
        $this->thumbDocId = $thumbDocId;
        return $this;
    }

    /**
     * Gets as thumbFileName
     *
     * @return string
     */
    public function getThumbFileName()
    {
        return $this->thumbFileName;
    }

    /**
     * Sets a new thumbFileName
     *
     * @param string $thumbFileName
     * @return self
     */
    public function setThumbFileName($thumbFileName)
    {
        $this->thumbFileName = $thumbFileName;
        return $this;
    }

    /**
     * Gets as thumbTypeId
     *
     * @return int
     */
    public function getThumbTypeId()
    {
        return $this->thumbTypeId;
    }

    /**
     * Sets a new thumbTypeId
     *
     * @param int $thumbTypeId
     * @return self
     */
    public function setThumbTypeId($thumbTypeId)
    {
        $this->thumbTypeId = $thumbTypeId;
        return $this;
    }


}

