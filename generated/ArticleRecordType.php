<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleRecordType
 *
 * 
 * XSD Type: ArticleRecord
 */
class ArticleRecordType
{

    /**
     * @var int $dataSupplierId
     */
    private $dataSupplierId = null;

    /**
     * @var string $articleNumber
     */
    private $articleNumber = null;

    /**
     * @var int $mfrId
     */
    private $mfrId = null;

    /**
     * @var string $mfrName
     */
    private $mfrName = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\MiscArticleDataRecordType $misc
     */
    private $misc = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\GenericArticleRecordType[] $genericArticles
     */
    private $genericArticles = [
        
    ];

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleTextRecordType[] $articleText
     */
    private $articleText = [
        
    ];

    /**
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @var string[] $gtins
     */
    private $gtins = [
        
    ];

    /**
     * @var string[] $tradeNumbers
     */
    private $tradeNumbers = [
        
    ];

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $oemNumbers
     */
    private $oemNumbers = [
        
    ];

    /**
     * This Article replaces these articles
     *
     * @var \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $replacesArticles
     */
    private $replacesArticles = [
        
    ];

    /**
     * This article has been replaced by these articles
     *
     * @var \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $replacedByArticles
     */
    private $replacedByArticles = [
        
    ];

    /**
     * Article Criteria
     *
     * @var \Baumeister\TecDocClient\Generated\CriteriaRecordType[] $articleCriteria
     */
    private $articleCriteria = [
        
    ];

    /**
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @var \Baumeister\TecDocClient\Generated\ArticleLinkageRecordType[] $linkages
     */
    private $linkages = [
        
    ];

    /**
     * PDF Documents Associated with the Article
     *
     * @var \Baumeister\TecDocClient\Generated\PDFRecordType[] $pdfs
     */
    private $pdfs = [
        
    ];

    /**
     * Images Associated with the Article
     *
     * @var \Baumeister\TecDocClient\Generated\ImageRecordType[] $images
     */
    private $images = [
        
    ];

    /**
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @var \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $comparableNumbers
     */
    private $comparableNumbers = [
        
    ];

    /**
     * @var \Baumeister\TecDocClient\Generated\SearchQueryMatchType[] $searchQueryMatches
     */
    private $searchQueryMatches = [
        
    ];

    /**
     * Links Associated with the Article
     *
     * @var \Baumeister\TecDocClient\Generated\LinkRecordType[] $links
     */
    private $links = [
        
    ];

    /**
     * The total number of matching linkages for this request.
     *
     * @var int $totalLinkages
     */
    private $totalLinkages = null;

    /**
     * Prices Associated with the Article
     *
     * @var \Baumeister\TecDocClient\Generated\PriceRecordType[] $prices
     */
    private $prices = [
        
    ];

    /**
     * Gets as dataSupplierId
     *
     * @return int
     */
    public function getDataSupplierId()
    {
        return $this->dataSupplierId;
    }

    /**
     * Sets a new dataSupplierId
     *
     * @param int $dataSupplierId
     * @return self
     */
    public function setDataSupplierId($dataSupplierId)
    {
        $this->dataSupplierId = $dataSupplierId;
        return $this;
    }

    /**
     * Gets as articleNumber
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Sets a new articleNumber
     *
     * @param string $articleNumber
     * @return self
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * Gets as mfrId
     *
     * @return int
     */
    public function getMfrId()
    {
        return $this->mfrId;
    }

    /**
     * Sets a new mfrId
     *
     * @param int $mfrId
     * @return self
     */
    public function setMfrId($mfrId)
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * Gets as mfrName
     *
     * @return string
     */
    public function getMfrName()
    {
        return $this->mfrName;
    }

    /**
     * Sets a new mfrName
     *
     * @param string $mfrName
     * @return self
     */
    public function setMfrName($mfrName)
    {
        $this->mfrName = $mfrName;
        return $this;
    }

    /**
     * Gets as misc
     *
     * @return \Baumeister\TecDocClient\Generated\MiscArticleDataRecordType
     */
    public function getMisc()
    {
        return $this->misc;
    }

    /**
     * Sets a new misc
     *
     * @param \Baumeister\TecDocClient\Generated\MiscArticleDataRecordType $misc
     * @return self
     */
    public function setMisc(\Baumeister\TecDocClient\Generated\MiscArticleDataRecordType $misc)
    {
        $this->misc = $misc;
        return $this;
    }

    /**
     * Adds as genericArticles
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\GenericArticleRecordType $genericArticles
     */
    public function addToGenericArticles(\Baumeister\TecDocClient\Generated\GenericArticleRecordType $genericArticles)
    {
        $this->genericArticles[] = $genericArticles;
        return $this;
    }

    /**
     * isset genericArticles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenericArticles($index)
    {
        return isset($this->genericArticles[$index]);
    }

    /**
     * unset genericArticles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenericArticles($index)
    {
        unset($this->genericArticles[$index]);
    }

    /**
     * Gets as genericArticles
     *
     * @return \Baumeister\TecDocClient\Generated\GenericArticleRecordType[]
     */
    public function getGenericArticles()
    {
        return $this->genericArticles;
    }

    /**
     * Sets a new genericArticles
     *
     * @param \Baumeister\TecDocClient\Generated\GenericArticleRecordType[] $genericArticles
     * @return self
     */
    public function setGenericArticles(array $genericArticles)
    {
        $this->genericArticles = $genericArticles;
        return $this;
    }

    /**
     * Adds as articleText
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleTextRecordType $articleText
     */
    public function addToArticleText(\Baumeister\TecDocClient\Generated\ArticleTextRecordType $articleText)
    {
        $this->articleText[] = $articleText;
        return $this;
    }

    /**
     * isset articleText
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleText($index)
    {
        return isset($this->articleText[$index]);
    }

    /**
     * unset articleText
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleText($index)
    {
        unset($this->articleText[$index]);
    }

    /**
     * Gets as articleText
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleTextRecordType[]
     */
    public function getArticleText()
    {
        return $this->articleText;
    }

    /**
     * Sets a new articleText
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleTextRecordType[] $articleText
     * @return self
     */
    public function setArticleText(array $articleText)
    {
        $this->articleText = $articleText;
        return $this;
    }

    /**
     * Adds as gtins
     *
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @return self
     * @param string $gtins
     */
    public function addToGtins($gtins)
    {
        $this->gtins[] = $gtins;
        return $this;
    }

    /**
     * isset gtins
     *
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGtins($index)
    {
        return isset($this->gtins[$index]);
    }

    /**
     * unset gtins
     *
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGtins($index)
    {
        unset($this->gtins[$index]);
    }

    /**
     * Gets as gtins
     *
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @return string[]
     */
    public function getGtins()
    {
        return $this->gtins;
    }

    /**
     * Sets a new gtins
     *
     * Any Global Trade Identification Numbers (GTINs) associated with this part. (Note: this includes EANs)
     *
     * @param string[] $gtins
     * @return self
     */
    public function setGtins(array $gtins)
    {
        $this->gtins = $gtins;
        return $this;
    }

    /**
     * Adds as tradeNumbers
     *
     * @return self
     * @param string $tradeNumbers
     */
    public function addToTradeNumbers($tradeNumbers)
    {
        $this->tradeNumbers[] = $tradeNumbers;
        return $this;
    }

    /**
     * isset tradeNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTradeNumbers($index)
    {
        return isset($this->tradeNumbers[$index]);
    }

    /**
     * unset tradeNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTradeNumbers($index)
    {
        unset($this->tradeNumbers[$index]);
    }

    /**
     * Gets as tradeNumbers
     *
     * @return string[]
     */
    public function getTradeNumbers()
    {
        return $this->tradeNumbers;
    }

    /**
     * Sets a new tradeNumbers
     *
     * @param string[] $tradeNumbers
     * @return self
     */
    public function setTradeNumbers(array $tradeNumbers)
    {
        $this->tradeNumbers = $tradeNumbers;
        return $this;
    }

    /**
     * Adds as oemNumbers
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType $oemNumbers
     */
    public function addToOemNumbers(\Baumeister\TecDocClient\Generated\ArticleRefRecordType $oemNumbers)
    {
        $this->oemNumbers[] = $oemNumbers;
        return $this;
    }

    /**
     * isset oemNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOemNumbers($index)
    {
        return isset($this->oemNumbers[$index]);
    }

    /**
     * unset oemNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOemNumbers($index)
    {
        unset($this->oemNumbers[$index]);
    }

    /**
     * Gets as oemNumbers
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleRefRecordType[]
     */
    public function getOemNumbers()
    {
        return $this->oemNumbers;
    }

    /**
     * Sets a new oemNumbers
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $oemNumbers
     * @return self
     */
    public function setOemNumbers(array $oemNumbers)
    {
        $this->oemNumbers = $oemNumbers;
        return $this;
    }

    /**
     * Adds as replacesArticles
     *
     * This Article replaces these articles
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType $replacesArticles
     */
    public function addToReplacesArticles(\Baumeister\TecDocClient\Generated\ArticleRefRecordType $replacesArticles)
    {
        $this->replacesArticles[] = $replacesArticles;
        return $this;
    }

    /**
     * isset replacesArticles
     *
     * This Article replaces these articles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacesArticles($index)
    {
        return isset($this->replacesArticles[$index]);
    }

    /**
     * unset replacesArticles
     *
     * This Article replaces these articles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacesArticles($index)
    {
        unset($this->replacesArticles[$index]);
    }

    /**
     * Gets as replacesArticles
     *
     * This Article replaces these articles
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleRefRecordType[]
     */
    public function getReplacesArticles()
    {
        return $this->replacesArticles;
    }

    /**
     * Sets a new replacesArticles
     *
     * This Article replaces these articles
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $replacesArticles
     * @return self
     */
    public function setReplacesArticles(array $replacesArticles)
    {
        $this->replacesArticles = $replacesArticles;
        return $this;
    }

    /**
     * Adds as replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType $replacedByArticles
     */
    public function addToReplacedByArticles(\Baumeister\TecDocClient\Generated\ArticleRefRecordType $replacedByArticles)
    {
        $this->replacedByArticles[] = $replacedByArticles;
        return $this;
    }

    /**
     * isset replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacedByArticles($index)
    {
        return isset($this->replacedByArticles[$index]);
    }

    /**
     * unset replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacedByArticles($index)
    {
        unset($this->replacedByArticles[$index]);
    }

    /**
     * Gets as replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleRefRecordType[]
     */
    public function getReplacedByArticles()
    {
        return $this->replacedByArticles;
    }

    /**
     * Sets a new replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $replacedByArticles
     * @return self
     */
    public function setReplacedByArticles(array $replacedByArticles)
    {
        $this->replacedByArticles = $replacedByArticles;
        return $this;
    }

    /**
     * Adds as articleCriteria
     *
     * Article Criteria
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\CriteriaRecordType $articleCriteria
     */
    public function addToArticleCriteria(\Baumeister\TecDocClient\Generated\CriteriaRecordType $articleCriteria)
    {
        $this->articleCriteria[] = $articleCriteria;
        return $this;
    }

    /**
     * isset articleCriteria
     *
     * Article Criteria
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleCriteria($index)
    {
        return isset($this->articleCriteria[$index]);
    }

    /**
     * unset articleCriteria
     *
     * Article Criteria
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleCriteria($index)
    {
        unset($this->articleCriteria[$index]);
    }

    /**
     * Gets as articleCriteria
     *
     * Article Criteria
     *
     * @return \Baumeister\TecDocClient\Generated\CriteriaRecordType[]
     */
    public function getArticleCriteria()
    {
        return $this->articleCriteria;
    }

    /**
     * Sets a new articleCriteria
     *
     * Article Criteria
     *
     * @param \Baumeister\TecDocClient\Generated\CriteriaRecordType[] $articleCriteria
     * @return self
     */
    public function setArticleCriteria(array $articleCriteria)
    {
        $this->articleCriteria = $articleCriteria;
        return $this;
    }

    /**
     * Adds as linkages
     *
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkageRecordType $linkages
     */
    public function addToLinkages(\Baumeister\TecDocClient\Generated\ArticleLinkageRecordType $linkages)
    {
        $this->linkages[] = $linkages;
        return $this;
    }

    /**
     * isset linkages
     *
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkages($index)
    {
        return isset($this->linkages[$index]);
    }

    /**
     * unset linkages
     *
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkages($index)
    {
        unset($this->linkages[$index]);
    }

    /**
     * Gets as linkages
     *
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleLinkageRecordType[]
     */
    public function getLinkages()
    {
        return $this->linkages;
    }

    /**
     * Sets a new linkages
     *
     * Matching Linkages (only populated if a linkage filter was passed in as part of the request)
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkageRecordType[] $linkages
     * @return self
     */
    public function setLinkages(array $linkages)
    {
        $this->linkages = $linkages;
        return $this;
    }

    /**
     * Adds as pdfs
     *
     * PDF Documents Associated with the Article
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\PDFRecordType $pdfs
     */
    public function addToPdfs(\Baumeister\TecDocClient\Generated\PDFRecordType $pdfs)
    {
        $this->pdfs[] = $pdfs;
        return $this;
    }

    /**
     * isset pdfs
     *
     * PDF Documents Associated with the Article
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPdfs($index)
    {
        return isset($this->pdfs[$index]);
    }

    /**
     * unset pdfs
     *
     * PDF Documents Associated with the Article
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPdfs($index)
    {
        unset($this->pdfs[$index]);
    }

    /**
     * Gets as pdfs
     *
     * PDF Documents Associated with the Article
     *
     * @return \Baumeister\TecDocClient\Generated\PDFRecordType[]
     */
    public function getPdfs()
    {
        return $this->pdfs;
    }

    /**
     * Sets a new pdfs
     *
     * PDF Documents Associated with the Article
     *
     * @param \Baumeister\TecDocClient\Generated\PDFRecordType[] $pdfs
     * @return self
     */
    public function setPdfs(array $pdfs)
    {
        $this->pdfs = $pdfs;
        return $this;
    }

    /**
     * Adds as images
     *
     * Images Associated with the Article
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ImageRecordType $images
     */
    public function addToImages(\Baumeister\TecDocClient\Generated\ImageRecordType $images)
    {
        $this->images[] = $images;
        return $this;
    }

    /**
     * isset images
     *
     * Images Associated with the Article
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImages($index)
    {
        return isset($this->images[$index]);
    }

    /**
     * unset images
     *
     * Images Associated with the Article
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImages($index)
    {
        unset($this->images[$index]);
    }

    /**
     * Gets as images
     *
     * Images Associated with the Article
     *
     * @return \Baumeister\TecDocClient\Generated\ImageRecordType[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * Images Associated with the Article
     *
     * @param \Baumeister\TecDocClient\Generated\ImageRecordType[] $images
     * @return self
     */
    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Adds as comparableNumbers
     *
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType $comparableNumbers
     */
    public function addToComparableNumbers(\Baumeister\TecDocClient\Generated\ArticleRefRecordType $comparableNumbers)
    {
        $this->comparableNumbers[] = $comparableNumbers;
        return $this;
    }

    /**
     * isset comparableNumbers
     *
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComparableNumbers($index)
    {
        return isset($this->comparableNumbers[$index]);
    }

    /**
     * unset comparableNumbers
     *
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComparableNumbers($index)
    {
        unset($this->comparableNumbers[$index]);
    }

    /**
     * Gets as comparableNumbers
     *
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleRefRecordType[]
     */
    public function getComparableNumbers()
    {
        return $this->comparableNumbers;
    }

    /**
     * Sets a new comparableNumbers
     *
     * Comparable numbers associated with this part (Note: Right now this is only populated if the comparable numbers match the search query).
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleRefRecordType[] $comparableNumbers
     * @return self
     */
    public function setComparableNumbers(array $comparableNumbers)
    {
        $this->comparableNumbers = $comparableNumbers;
        return $this;
    }

    /**
     * Adds as searchQueryMatches
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\SearchQueryMatchType $searchQueryMatches
     */
    public function addToSearchQueryMatches(\Baumeister\TecDocClient\Generated\SearchQueryMatchType $searchQueryMatches)
    {
        $this->searchQueryMatches[] = $searchQueryMatches;
        return $this;
    }

    /**
     * isset searchQueryMatches
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSearchQueryMatches($index)
    {
        return isset($this->searchQueryMatches[$index]);
    }

    /**
     * unset searchQueryMatches
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSearchQueryMatches($index)
    {
        unset($this->searchQueryMatches[$index]);
    }

    /**
     * Gets as searchQueryMatches
     *
     * @return \Baumeister\TecDocClient\Generated\SearchQueryMatchType[]
     */
    public function getSearchQueryMatches()
    {
        return $this->searchQueryMatches;
    }

    /**
     * Sets a new searchQueryMatches
     *
     * @param \Baumeister\TecDocClient\Generated\SearchQueryMatchType[] $searchQueryMatches
     * @return self
     */
    public function setSearchQueryMatches(array $searchQueryMatches)
    {
        $this->searchQueryMatches = $searchQueryMatches;
        return $this;
    }

    /**
     * Adds as links
     *
     * Links Associated with the Article
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\LinkRecordType $links
     */
    public function addToLinks(\Baumeister\TecDocClient\Generated\LinkRecordType $links)
    {
        $this->links[] = $links;
        return $this;
    }

    /**
     * isset links
     *
     * Links Associated with the Article
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinks($index)
    {
        return isset($this->links[$index]);
    }

    /**
     * unset links
     *
     * Links Associated with the Article
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinks($index)
    {
        unset($this->links[$index]);
    }

    /**
     * Gets as links
     *
     * Links Associated with the Article
     *
     * @return \Baumeister\TecDocClient\Generated\LinkRecordType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * Links Associated with the Article
     *
     * @param \Baumeister\TecDocClient\Generated\LinkRecordType[] $links
     * @return self
     */
    public function setLinks(array $links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as totalLinkages
     *
     * The total number of matching linkages for this request.
     *
     * @return int
     */
    public function getTotalLinkages()
    {
        return $this->totalLinkages;
    }

    /**
     * Sets a new totalLinkages
     *
     * The total number of matching linkages for this request.
     *
     * @param int $totalLinkages
     * @return self
     */
    public function setTotalLinkages($totalLinkages)
    {
        $this->totalLinkages = $totalLinkages;
        return $this;
    }

    /**
     * Adds as prices
     *
     * Prices Associated with the Article
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\PriceRecordType $prices
     */
    public function addToPrices(\Baumeister\TecDocClient\Generated\PriceRecordType $prices)
    {
        $this->prices[] = $prices;
        return $this;
    }

    /**
     * isset prices
     *
     * Prices Associated with the Article
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * Prices Associated with the Article
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * Prices Associated with the Article
     *
     * @return \Baumeister\TecDocClient\Generated\PriceRecordType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * Prices Associated with the Article
     *
     * @param \Baumeister\TecDocClient\Generated\PriceRecordType[] $prices
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
        return $this;
    }


}

