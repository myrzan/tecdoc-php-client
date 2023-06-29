<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticleLinkedAllLinkingTarget3
 *
 *
 * XSD Type: articleLinkedAllLinkingTarget3Record
 */
class ArticleLinkedAllLinkingTarget3
{

    /**
     * @var ArticleLinkedAllLinkingTarget[] $articleLinkages
     */
    private $articleLinkages = null;

    /**
     * @var MainArticleLinkedVehicles[] $mainArticleLinkages
     */
    private $mainArticleLinkages = null;

    /**
     * Adds as array
     *
     * @param ArticleLinkedAllLinkingTarget $array
     * @return self
     */
    public function addToArticleLinkages(ArticleLinkedAllLinkingTarget $array)
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
     * @return ArticleLinkedAllLinkingTarget[]
     */
    public function getArticleLinkages()
    {
        return $this->articleLinkages;
    }

    /**
     * Sets a new articleLinkages
     *
     * @param ArticleLinkedAllLinkingTarget[] $articleLinkages
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
     * @param MainArticleLinkedVehicles $array
     * @return self
     */
    public function addToMainArticleLinkages(MainArticleLinkedVehicles $array)
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
     * @return MainArticleLinkedVehicles[]
     */
    public function getMainArticleLinkages()
    {
        return $this->mainArticleLinkages;
    }

    /**
     * Sets a new mainArticleLinkages
     *
     * @param MainArticleLinkedVehicles[] $mainArticleLinkages
     * @return self
     */
    public function setMainArticleLinkages(array $mainArticleLinkages)
    {
        $this->mainArticleLinkages = $mainArticleLinkages;
        return $this;
    }


}

