<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AssignedArticleInfosRecordType
 *
 * 
 * XSD Type: assignedArticleInfosRecord
 */
class AssignedArticleInfosRecordType extends AssignedArticleInfosRecordSrcType
{

    /**
     * @var int $infoId
     */
    private $infoId = null;

    /**
     * @var string $infoText
     */
    private $infoText = null;

    /**
     * @var int $infoType
     */
    private $infoType = null;

    /**
     * @var string $infoTypeName
     */
    private $infoTypeName = null;

    /**
     * Gets as infoId
     *
     * @return int
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Sets a new infoId
     *
     * @param int $infoId
     * @return self
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;
        return $this;
    }

    /**
     * Gets as infoText
     *
     * @return string
     */
    public function getInfoText()
    {
        return $this->infoText;
    }

    /**
     * Sets a new infoText
     *
     * @param string $infoText
     * @return self
     */
    public function setInfoText($infoText)
    {
        $this->infoText = $infoText;
        return $this;
    }

    /**
     * Gets as infoType
     *
     * @return int
     */
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Sets a new infoType
     *
     * @param int $infoType
     * @return self
     */
    public function setInfoType($infoType)
    {
        $this->infoType = $infoType;
        return $this;
    }

    /**
     * Gets as infoTypeName
     *
     * @return string
     */
    public function getInfoTypeName()
    {
        return $this->infoTypeName;
    }

    /**
     * Sets a new infoTypeName
     *
     * @param string $infoTypeName
     * @return self
     */
    public function setInfoTypeName($infoTypeName)
    {
        $this->infoTypeName = $infoTypeName;
        return $this;
    }


}

