<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ImmediateInfosRecordType
 *
 * 
 * XSD Type: immediateInfosRecord
 */
class ImmediateInfosRecordType extends ImmediateInfosRecordSrcType
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
     * @var int $infoTypeId
     */
    private $infoTypeId = null;

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
     * Gets as infoTypeId
     *
     * @return int
     */
    public function getInfoTypeId()
    {
        return $this->infoTypeId;
    }

    /**
     * Sets a new infoTypeId
     *
     * @param int $infoTypeId
     * @return self
     */
    public function setInfoTypeId($infoTypeId)
    {
        $this->infoTypeId = $infoTypeId;
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

