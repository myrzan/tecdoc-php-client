<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleLinkageRecordType
 *
 * 
 * XSD Type: ArticleLinkageRecord
 */
class ArticleLinkageRecordType
{

    /**
     * @var int $linkageTargetTypeId
     */
    private $linkageTargetTypeId = null;

    /**
     * @var int $linkageTargetId
     */
    private $linkageTargetId = null;

    /**
     * @var int $legacyArticleLinkId
     */
    private $legacyArticleLinkId = null;

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $genericArticleDescription
     */
    private $genericArticleDescription = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaRecordType[] $linkageCriteria
     */
    private $linkageCriteria = [
        
    ];

    /**
     * @var \Myrzan\TecDocClient\Generated\LinkageTextRecordType[] $linkageText
     */
    private $linkageText = [
        
    ];

    /**
     * Gets as linkageTargetTypeId
     *
     * @return int
     */
    public function getLinkageTargetTypeId()
    {
        return $this->linkageTargetTypeId;
    }

    /**
     * Sets a new linkageTargetTypeId
     *
     * @param int $linkageTargetTypeId
     * @return self
     */
    public function setLinkageTargetTypeId($linkageTargetTypeId)
    {
        $this->linkageTargetTypeId = $linkageTargetTypeId;
        return $this;
    }

    /**
     * Gets as linkageTargetId
     *
     * @return int
     */
    public function getLinkageTargetId()
    {
        return $this->linkageTargetId;
    }

    /**
     * Sets a new linkageTargetId
     *
     * @param int $linkageTargetId
     * @return self
     */
    public function setLinkageTargetId($linkageTargetId)
    {
        $this->linkageTargetId = $linkageTargetId;
        return $this;
    }

    /**
     * Gets as legacyArticleLinkId
     *
     * @return int
     */
    public function getLegacyArticleLinkId()
    {
        return $this->legacyArticleLinkId;
    }

    /**
     * Sets a new legacyArticleLinkId
     *
     * @param int $legacyArticleLinkId
     * @return self
     */
    public function setLegacyArticleLinkId($legacyArticleLinkId)
    {
        $this->legacyArticleLinkId = $legacyArticleLinkId;
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

    /**
     * Gets as genericArticleDescription
     *
     * @return string
     */
    public function getGenericArticleDescription()
    {
        return $this->genericArticleDescription;
    }

    /**
     * Sets a new genericArticleDescription
     *
     * @param string $genericArticleDescription
     * @return self
     */
    public function setGenericArticleDescription($genericArticleDescription)
    {
        $this->genericArticleDescription = $genericArticleDescription;
        return $this;
    }

    /**
     * Adds as linkageCriteria
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CriteriaRecordType $linkageCriteria
     */
    public function addToLinkageCriteria(\Myrzan\TecDocClient\Generated\CriteriaRecordType $linkageCriteria)
    {
        $this->linkageCriteria[] = $linkageCriteria;
        return $this;
    }

    /**
     * isset linkageCriteria
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkageCriteria($index)
    {
        return isset($this->linkageCriteria[$index]);
    }

    /**
     * unset linkageCriteria
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkageCriteria($index)
    {
        unset($this->linkageCriteria[$index]);
    }

    /**
     * Gets as linkageCriteria
     *
     * @return \Myrzan\TecDocClient\Generated\CriteriaRecordType[]
     */
    public function getLinkageCriteria()
    {
        return $this->linkageCriteria;
    }

    /**
     * Sets a new linkageCriteria
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaRecordType[] $linkageCriteria
     * @return self
     */
    public function setLinkageCriteria(array $linkageCriteria)
    {
        $this->linkageCriteria = $linkageCriteria;
        return $this;
    }

    /**
     * Adds as linkageText
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\LinkageTextRecordType $linkageText
     */
    public function addToLinkageText(\Myrzan\TecDocClient\Generated\LinkageTextRecordType $linkageText)
    {
        $this->linkageText[] = $linkageText;
        return $this;
    }

    /**
     * isset linkageText
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkageText($index)
    {
        return isset($this->linkageText[$index]);
    }

    /**
     * unset linkageText
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkageText($index)
    {
        unset($this->linkageText[$index]);
    }

    /**
     * Gets as linkageText
     *
     * @return \Myrzan\TecDocClient\Generated\LinkageTextRecordType[]
     */
    public function getLinkageText()
    {
        return $this->linkageText;
    }

    /**
     * Sets a new linkageText
     *
     * @param \Myrzan\TecDocClient\Generated\LinkageTextRecordType[] $linkageText
     * @return self
     */
    public function setLinkageText(array $linkageText)
    {
        $this->linkageText = $linkageText;
        return $this;
    }


}

