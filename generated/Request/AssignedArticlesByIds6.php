<?php

namespace Myrzan\TecDocClient\Generated\Request;

use Myrzan\TecDocClient\Generated\Record\ArticleIdPair;

/**
 * Class representing AssignedArticlesByIds6
 *
 * 
 * XSD Type: assignedArticlesByIds6Request
 */
class AssignedArticlesByIds6 
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var ArticleIdPair[] $articleIdPairs
     */
    private $articleIdPairs = null;

    /**
     * @var bool $attributs
     */
    private $attributs = null;

    /**
     * @var bool $basicData
     */
    private $basicData = null;

    /**
     * @var bool $documents
     */
    private $documents = null;

    /**
     * @var bool $eanNumbers
     */
    private $eanNumbers = null;

    /**
     * @var bool $immediateAttributs
     */
    private $immediateAttributs = null;

    /**
     * @var bool $immediateInfo
     */
    private $immediateInfo = null;

    /**
     * @var bool $info
     */
    private $info = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var bool $mainArticles
     */
    private $mainArticles = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var int $modId
     */
    private $modId = null;

    /**
     * @var bool $normalAustauschPrice
     */
    private $normalAustauschPrice = null;

    /**
     * @var bool $oeNumbers
     */
    private $oeNumbers = null;

    /**
     * @var int $priceDate
     */
    private $priceDate = null;

    /**
     * @var bool $prices
     */
    private $prices = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $replacedByNumbers
     */
    private $replacedByNumbers = null;

    /**
     * @var bool $replacedNumbers
     */
    private $replacedNumbers = null;

    /**
     * @var bool $thumbnails
     */
    private $thumbnails = null;

    /**
     * @var bool $usageNumbers
     */
    private $usageNumbers = null;

    /**
     * Gets as articleCountry
     *
     * @return string
     */
    public function getArticleCountry()
    {
        return $this->articleCountry;
    }

    /**
     * Sets a new articleCountry
     *
     * @param string $articleCountry
     * @return self
     */
    public function setArticleCountry($articleCountry)
    {
        $this->articleCountry = $articleCountry;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param ArticleIdPair $array
     * @return self
     */
    public function addToArticleIdPairs(ArticleIdPair $array)
    {
        $this->articleIdPairs[] = $array;
        return $this;
    }

    /**
     * isset articleIdPairs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleIdPairs($index)
    {
        return isset($this->articleIdPairs[$index]);
    }

    /**
     * unset articleIdPairs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleIdPairs($index)
    {
        unset($this->articleIdPairs[$index]);
    }

    /**
     * Gets as articleIdPairs
     *
     * @return ArticleIdPair[]
     */
    public function getArticleIdPairs()
    {
        return $this->articleIdPairs;
    }

    /**
     * Sets a new articleIdPairs
     *
     * @param ArticleIdPair[] $articleIdPairs
     * @return self
     */
    public function setArticleIdPairs(array $articleIdPairs)
    {
        $this->articleIdPairs = $articleIdPairs;
        return $this;
    }

    /**
     * Gets as attributs
     *
     * @return bool
     */
    public function getAttributs()
    {
        return $this->attributs;
    }

    /**
     * Sets a new attributs
     *
     * @param bool $attributs
     * @return self
     */
    public function setAttributs($attributs)
    {
        $this->attributs = $attributs;
        return $this;
    }

    /**
     * Gets as basicData
     *
     * @return bool
     */
    public function getBasicData()
    {
        return $this->basicData;
    }

    /**
     * Sets a new basicData
     *
     * @param bool $basicData
     * @return self
     */
    public function setBasicData($basicData)
    {
        $this->basicData = $basicData;
        return $this;
    }

    /**
     * Gets as documents
     *
     * @return bool
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param bool $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as eanNumbers
     *
     * @return bool
     */
    public function getEanNumbers()
    {
        return $this->eanNumbers;
    }

    /**
     * Sets a new eanNumbers
     *
     * @param bool $eanNumbers
     * @return self
     */
    public function setEanNumbers($eanNumbers)
    {
        $this->eanNumbers = $eanNumbers;
        return $this;
    }

    /**
     * Gets as immediateAttributs
     *
     * @return bool
     */
    public function getImmediateAttributs()
    {
        return $this->immediateAttributs;
    }

    /**
     * Sets a new immediateAttributs
     *
     * @param bool $immediateAttributs
     * @return self
     */
    public function setImmediateAttributs($immediateAttributs)
    {
        $this->immediateAttributs = $immediateAttributs;
        return $this;
    }

    /**
     * Gets as immediateInfo
     *
     * @return bool
     */
    public function getImmediateInfo()
    {
        return $this->immediateInfo;
    }

    /**
     * Sets a new immediateInfo
     *
     * @param bool $immediateInfo
     * @return self
     */
    public function setImmediateInfo($immediateInfo)
    {
        $this->immediateInfo = $immediateInfo;
        return $this;
    }

    /**
     * Gets as info
     *
     * @return bool
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param bool $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as linkingTargetId
     *
     * @return int
     */
    public function getLinkingTargetId()
    {
        return $this->linkingTargetId;
    }

    /**
     * Sets a new linkingTargetId
     *
     * @param int $linkingTargetId
     * @return self
     */
    public function setLinkingTargetId($linkingTargetId)
    {
        $this->linkingTargetId = $linkingTargetId;
        return $this;
    }

    /**
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
        return $this;
    }

    /**
     * Gets as mainArticles
     *
     * @return bool
     */
    public function getMainArticles()
    {
        return $this->mainArticles;
    }

    /**
     * Sets a new mainArticles
     *
     * @param bool $mainArticles
     * @return self
     */
    public function setMainArticles($mainArticles)
    {
        $this->mainArticles = $mainArticles;
        return $this;
    }

    /**
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
        return $this;
    }

    /**
     * Gets as modId
     *
     * @return int
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Sets a new modId
     *
     * @param int $modId
     * @return self
     */
    public function setModId($modId)
    {
        $this->modId = $modId;
        return $this;
    }

    /**
     * Gets as normalAustauschPrice
     *
     * @return bool
     */
    public function getNormalAustauschPrice()
    {
        return $this->normalAustauschPrice;
    }

    /**
     * Sets a new normalAustauschPrice
     *
     * @param bool $normalAustauschPrice
     * @return self
     */
    public function setNormalAustauschPrice($normalAustauschPrice)
    {
        $this->normalAustauschPrice = $normalAustauschPrice;
        return $this;
    }

    /**
     * Gets as oeNumbers
     *
     * @return bool
     */
    public function getOeNumbers()
    {
        return $this->oeNumbers;
    }

    /**
     * Sets a new oeNumbers
     *
     * @param bool $oeNumbers
     * @return self
     */
    public function setOeNumbers($oeNumbers)
    {
        $this->oeNumbers = $oeNumbers;
        return $this;
    }

    /**
     * Gets as priceDate
     *
     * @return int
     */
    public function getPriceDate()
    {
        return $this->priceDate;
    }

    /**
     * Sets a new priceDate
     *
     * @param int $priceDate
     * @return self
     */
    public function setPriceDate($priceDate)
    {
        $this->priceDate = $priceDate;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return bool
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param bool $prices
     * @return self
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as provider
     *
     * Your assigned TecDoc Provider Id
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * Your assigned TecDoc Provider Id
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as replacedByNumbers
     *
     * @return bool
     */
    public function getReplacedByNumbers()
    {
        return $this->replacedByNumbers;
    }

    /**
     * Sets a new replacedByNumbers
     *
     * @param bool $replacedByNumbers
     * @return self
     */
    public function setReplacedByNumbers($replacedByNumbers)
    {
        $this->replacedByNumbers = $replacedByNumbers;
        return $this;
    }

    /**
     * Gets as replacedNumbers
     *
     * @return bool
     */
    public function getReplacedNumbers()
    {
        return $this->replacedNumbers;
    }

    /**
     * Sets a new replacedNumbers
     *
     * @param bool $replacedNumbers
     * @return self
     */
    public function setReplacedNumbers($replacedNumbers)
    {
        $this->replacedNumbers = $replacedNumbers;
        return $this;
    }

    /**
     * Gets as thumbnails
     *
     * @return bool
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * Sets a new thumbnails
     *
     * @param bool $thumbnails
     * @return self
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
        return $this;
    }

    /**
     * Gets as usageNumbers
     *
     * @return bool
     */
    public function getUsageNumbers()
    {
        return $this->usageNumbers;
    }

    /**
     * Sets a new usageNumbers
     *
     * @param bool $usageNumbers
     * @return self
     */
    public function setUsageNumbers($usageNumbers)
    {
        $this->usageNumbers = $usageNumbers;
        return $this;
    }


}

