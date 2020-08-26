<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleLinkedAllLinkingTarget3RecordType
 *
 * 
 * XSD Type: articleLinkedAllLinkingTarget3Record
 */
class ArticleLinkedAllLinkingTarget3RecordType extends ArticleLinkedAllLinkingTarget3RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticleLinkedAllLinkingTargetRecordType[] $articleLinkages
     */
    private $articleLinkages = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\MainArticleLinkedVehiclesRecordType[] $mainArticleLinkages
     */
    private $mainArticleLinkages = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\ArticleLinkedAllLinkingTargetRecordType $array
     */
    public function addToArticleLinkages(\Myrzan\TecDocClient\Generated\ArticleLinkedAllLinkingTargetRecordType $array)
    {
        $this->articleLinkages[] = $array;
        return $this;
    }

    /**
     * isset articleLinkages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleLinkages($index)
    {
        return isset($this->articleLinkages[$index]);
    }

    /**
     * unset articleLinkages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleLinkages($index)
    {
        unset($this->articleLinkages[$index]);
    }

    /**
     * Gets as articleLinkages
     *
     * @return \Myrzan\TecDocClient\Generated\ArticleLinkedAllLinkingTargetRecordType[]
     */
    public function getArticleLinkages()
    {
        return $this->articleLinkages;
    }

    /**
     * Sets a new articleLinkages
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleLinkedAllLinkingTargetRecordType[] $articleLinkages
     * @return self
     */
    public function setArticleLinkages(array $articleLinkages)
    {
        $this->articleLinkages = $articleLinkages;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\MainArticleLinkedVehiclesRecordType $array
     */
    public function addToMainArticleLinkages(\Myrzan\TecDocClient\Generated\MainArticleLinkedVehiclesRecordType $array)
    {
        $this->mainArticleLinkages[] = $array;
        return $this;
    }

    /**
     * isset mainArticleLinkages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainArticleLinkages($index)
    {
        return isset($this->mainArticleLinkages[$index]);
    }

    /**
     * unset mainArticleLinkages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainArticleLinkages($index)
    {
        unset($this->mainArticleLinkages[$index]);
    }

    /**
     * Gets as mainArticleLinkages
     *
     * @return \Myrzan\TecDocClient\Generated\MainArticleLinkedVehiclesRecordType[]
     */
    public function getMainArticleLinkages()
    {
        return $this->mainArticleLinkages;
    }

    /**
     * Sets a new mainArticleLinkages
     *
     * @param \Myrzan\TecDocClient\Generated\MainArticleLinkedVehiclesRecordType[] $mainArticleLinkages
     * @return self
     */
    public function setMainArticleLinkages(array $mainArticleLinkages)
    {
        $this->mainArticleLinkages = $mainArticleLinkages;
        return $this;
    }


}

