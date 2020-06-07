<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticlesByIds4RecordType
 *
 * 
 * XSD Type: articlesByIds4Record
 */
class ArticlesByIds4RecordType extends ArticlesByIds4RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\AssignedArticleAttributs2RecordType[] $articleAttributes
     */
    private $articleAttributes = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleDocumentsRecordType[] $articleDocuments
     */
    private $articleDocuments = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AssignedArticleInfosRecordType[] $articleInfo
     */
    private $articleInfo = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticlePricesRecordType[] $articlePrices
     */
    private $articlePrices = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ThumbnailByArticleIdRecordType[] $articleThumbnails
     */
    private $articleThumbnails = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AssignedArticleById3RecordType $assignedArticle
     */
    private $assignedArticle = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleDirectSearchById3RecordType $directArticle
     */
    private $directArticle = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\EanNumbersRecordType[] $eanNumber
     */
    private $eanNumber = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ImmediateAttributs2RecordType[] $immediateAttributs
     */
    private $immediateAttributs = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ImmediateInfosRecordType[] $immediateInfo
     */
    private $immediateInfo = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\MainArticlesRecordType[] $mainArticle
     */
    private $mainArticle = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticlePricesNormalAustauschRecordType[] $normalAustauschPrice
     */
    private $normalAustauschPrice = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleOENumbersRecordType[] $oenNumbers
     */
    private $oenNumbers = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ReplacedByNumbersRecordType[] $replacedByNumber
     */
    private $replacedByNumber = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ReplacedNumbersRecordType[] $replacedNumber
     */
    private $replacedNumber = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\UsageNumbersRecordType[] $usageNumbers
     */
    private $usageNumbers = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AssignedArticleAttributs2RecordType $array
     */
    public function addToArticleAttributes(\Baumeister\TecDocClient\Generated\AssignedArticleAttributs2RecordType $array)
    {
        $this->articleAttributes[] = $array;
        return $this;
    }

    /**
     * isset articleAttributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleAttributes($index)
    {
        return isset($this->articleAttributes[$index]);
    }

    /**
     * unset articleAttributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleAttributes($index)
    {
        unset($this->articleAttributes[$index]);
    }

    /**
     * Gets as articleAttributes
     *
     * @return \Baumeister\TecDocClient\Generated\AssignedArticleAttributs2RecordType[]
     */
    public function getArticleAttributes()
    {
        return $this->articleAttributes;
    }

    /**
     * Sets a new articleAttributes
     *
     * @param \Baumeister\TecDocClient\Generated\AssignedArticleAttributs2RecordType[] $articleAttributes
     * @return self
     */
    public function setArticleAttributes(array $articleAttributes)
    {
        $this->articleAttributes = $articleAttributes;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleDocumentsRecordType $array
     */
    public function addToArticleDocuments(\Baumeister\TecDocClient\Generated\ArticleDocumentsRecordType $array)
    {
        $this->articleDocuments[] = $array;
        return $this;
    }

    /**
     * isset articleDocuments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleDocuments($index)
    {
        return isset($this->articleDocuments[$index]);
    }

    /**
     * unset articleDocuments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleDocuments($index)
    {
        unset($this->articleDocuments[$index]);
    }

    /**
     * Gets as articleDocuments
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleDocumentsRecordType[]
     */
    public function getArticleDocuments()
    {
        return $this->articleDocuments;
    }

    /**
     * Sets a new articleDocuments
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleDocumentsRecordType[] $articleDocuments
     * @return self
     */
    public function setArticleDocuments(array $articleDocuments)
    {
        $this->articleDocuments = $articleDocuments;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AssignedArticleInfosRecordType $array
     */
    public function addToArticleInfo(\Baumeister\TecDocClient\Generated\AssignedArticleInfosRecordType $array)
    {
        $this->articleInfo[] = $array;
        return $this;
    }

    /**
     * isset articleInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleInfo($index)
    {
        return isset($this->articleInfo[$index]);
    }

    /**
     * unset articleInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleInfo($index)
    {
        unset($this->articleInfo[$index]);
    }

    /**
     * Gets as articleInfo
     *
     * @return \Baumeister\TecDocClient\Generated\AssignedArticleInfosRecordType[]
     */
    public function getArticleInfo()
    {
        return $this->articleInfo;
    }

    /**
     * Sets a new articleInfo
     *
     * @param \Baumeister\TecDocClient\Generated\AssignedArticleInfosRecordType[] $articleInfo
     * @return self
     */
    public function setArticleInfo(array $articleInfo)
    {
        $this->articleInfo = $articleInfo;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticlePricesRecordType $array
     */
    public function addToArticlePrices(\Baumeister\TecDocClient\Generated\ArticlePricesRecordType $array)
    {
        $this->articlePrices[] = $array;
        return $this;
    }

    /**
     * isset articlePrices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticlePrices($index)
    {
        return isset($this->articlePrices[$index]);
    }

    /**
     * unset articlePrices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticlePrices($index)
    {
        unset($this->articlePrices[$index]);
    }

    /**
     * Gets as articlePrices
     *
     * @return \Baumeister\TecDocClient\Generated\ArticlePricesRecordType[]
     */
    public function getArticlePrices()
    {
        return $this->articlePrices;
    }

    /**
     * Sets a new articlePrices
     *
     * @param \Baumeister\TecDocClient\Generated\ArticlePricesRecordType[] $articlePrices
     * @return self
     */
    public function setArticlePrices(array $articlePrices)
    {
        $this->articlePrices = $articlePrices;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ThumbnailByArticleIdRecordType $array
     */
    public function addToArticleThumbnails(\Baumeister\TecDocClient\Generated\ThumbnailByArticleIdRecordType $array)
    {
        $this->articleThumbnails[] = $array;
        return $this;
    }

    /**
     * isset articleThumbnails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleThumbnails($index)
    {
        return isset($this->articleThumbnails[$index]);
    }

    /**
     * unset articleThumbnails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleThumbnails($index)
    {
        unset($this->articleThumbnails[$index]);
    }

    /**
     * Gets as articleThumbnails
     *
     * @return \Baumeister\TecDocClient\Generated\ThumbnailByArticleIdRecordType[]
     */
    public function getArticleThumbnails()
    {
        return $this->articleThumbnails;
    }

    /**
     * Sets a new articleThumbnails
     *
     * @param \Baumeister\TecDocClient\Generated\ThumbnailByArticleIdRecordType[] $articleThumbnails
     * @return self
     */
    public function setArticleThumbnails(array $articleThumbnails)
    {
        $this->articleThumbnails = $articleThumbnails;
        return $this;
    }

    /**
     * Gets as assignedArticle
     *
     * @return \Baumeister\TecDocClient\Generated\AssignedArticleById3RecordType
     */
    public function getAssignedArticle()
    {
        return $this->assignedArticle;
    }

    /**
     * Sets a new assignedArticle
     *
     * @param \Baumeister\TecDocClient\Generated\AssignedArticleById3RecordType $assignedArticle
     * @return self
     */
    public function setAssignedArticle(\Baumeister\TecDocClient\Generated\AssignedArticleById3RecordType $assignedArticle)
    {
        $this->assignedArticle = $assignedArticle;
        return $this;
    }

    /**
     * Gets as directArticle
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleDirectSearchById3RecordType
     */
    public function getDirectArticle()
    {
        return $this->directArticle;
    }

    /**
     * Sets a new directArticle
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleDirectSearchById3RecordType $directArticle
     * @return self
     */
    public function setDirectArticle(\Baumeister\TecDocClient\Generated\ArticleDirectSearchById3RecordType $directArticle)
    {
        $this->directArticle = $directArticle;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\EanNumbersRecordType $array
     */
    public function addToEanNumber(\Baumeister\TecDocClient\Generated\EanNumbersRecordType $array)
    {
        $this->eanNumber[] = $array;
        return $this;
    }

    /**
     * isset eanNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEanNumber($index)
    {
        return isset($this->eanNumber[$index]);
    }

    /**
     * unset eanNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEanNumber($index)
    {
        unset($this->eanNumber[$index]);
    }

    /**
     * Gets as eanNumber
     *
     * @return \Baumeister\TecDocClient\Generated\EanNumbersRecordType[]
     */
    public function getEanNumber()
    {
        return $this->eanNumber;
    }

    /**
     * Sets a new eanNumber
     *
     * @param \Baumeister\TecDocClient\Generated\EanNumbersRecordType[] $eanNumber
     * @return self
     */
    public function setEanNumber(array $eanNumber)
    {
        $this->eanNumber = $eanNumber;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ImmediateAttributs2RecordType $array
     */
    public function addToImmediateAttributs(\Baumeister\TecDocClient\Generated\ImmediateAttributs2RecordType $array)
    {
        $this->immediateAttributs[] = $array;
        return $this;
    }

    /**
     * isset immediateAttributs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImmediateAttributs($index)
    {
        return isset($this->immediateAttributs[$index]);
    }

    /**
     * unset immediateAttributs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImmediateAttributs($index)
    {
        unset($this->immediateAttributs[$index]);
    }

    /**
     * Gets as immediateAttributs
     *
     * @return \Baumeister\TecDocClient\Generated\ImmediateAttributs2RecordType[]
     */
    public function getImmediateAttributs()
    {
        return $this->immediateAttributs;
    }

    /**
     * Sets a new immediateAttributs
     *
     * @param \Baumeister\TecDocClient\Generated\ImmediateAttributs2RecordType[] $immediateAttributs
     * @return self
     */
    public function setImmediateAttributs(array $immediateAttributs)
    {
        $this->immediateAttributs = $immediateAttributs;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ImmediateInfosRecordType $array
     */
    public function addToImmediateInfo(\Baumeister\TecDocClient\Generated\ImmediateInfosRecordType $array)
    {
        $this->immediateInfo[] = $array;
        return $this;
    }

    /**
     * isset immediateInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImmediateInfo($index)
    {
        return isset($this->immediateInfo[$index]);
    }

    /**
     * unset immediateInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImmediateInfo($index)
    {
        unset($this->immediateInfo[$index]);
    }

    /**
     * Gets as immediateInfo
     *
     * @return \Baumeister\TecDocClient\Generated\ImmediateInfosRecordType[]
     */
    public function getImmediateInfo()
    {
        return $this->immediateInfo;
    }

    /**
     * Sets a new immediateInfo
     *
     * @param \Baumeister\TecDocClient\Generated\ImmediateInfosRecordType[] $immediateInfo
     * @return self
     */
    public function setImmediateInfo(array $immediateInfo)
    {
        $this->immediateInfo = $immediateInfo;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\MainArticlesRecordType $array
     */
    public function addToMainArticle(\Baumeister\TecDocClient\Generated\MainArticlesRecordType $array)
    {
        $this->mainArticle[] = $array;
        return $this;
    }

    /**
     * isset mainArticle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainArticle($index)
    {
        return isset($this->mainArticle[$index]);
    }

    /**
     * unset mainArticle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainArticle($index)
    {
        unset($this->mainArticle[$index]);
    }

    /**
     * Gets as mainArticle
     *
     * @return \Baumeister\TecDocClient\Generated\MainArticlesRecordType[]
     */
    public function getMainArticle()
    {
        return $this->mainArticle;
    }

    /**
     * Sets a new mainArticle
     *
     * @param \Baumeister\TecDocClient\Generated\MainArticlesRecordType[] $mainArticle
     * @return self
     */
    public function setMainArticle(array $mainArticle)
    {
        $this->mainArticle = $mainArticle;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticlePricesNormalAustauschRecordType $array
     */
    public function addToNormalAustauschPrice(\Baumeister\TecDocClient\Generated\ArticlePricesNormalAustauschRecordType $array)
    {
        $this->normalAustauschPrice[] = $array;
        return $this;
    }

    /**
     * isset normalAustauschPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNormalAustauschPrice($index)
    {
        return isset($this->normalAustauschPrice[$index]);
    }

    /**
     * unset normalAustauschPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNormalAustauschPrice($index)
    {
        unset($this->normalAustauschPrice[$index]);
    }

    /**
     * Gets as normalAustauschPrice
     *
     * @return \Baumeister\TecDocClient\Generated\ArticlePricesNormalAustauschRecordType[]
     */
    public function getNormalAustauschPrice()
    {
        return $this->normalAustauschPrice;
    }

    /**
     * Sets a new normalAustauschPrice
     *
     * @param \Baumeister\TecDocClient\Generated\ArticlePricesNormalAustauschRecordType[] $normalAustauschPrice
     * @return self
     */
    public function setNormalAustauschPrice(array $normalAustauschPrice)
    {
        $this->normalAustauschPrice = $normalAustauschPrice;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleOENumbersRecordType $array
     */
    public function addToOenNumbers(\Baumeister\TecDocClient\Generated\ArticleOENumbersRecordType $array)
    {
        $this->oenNumbers[] = $array;
        return $this;
    }

    /**
     * isset oenNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOenNumbers($index)
    {
        return isset($this->oenNumbers[$index]);
    }

    /**
     * unset oenNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOenNumbers($index)
    {
        unset($this->oenNumbers[$index]);
    }

    /**
     * Gets as oenNumbers
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleOENumbersRecordType[]
     */
    public function getOenNumbers()
    {
        return $this->oenNumbers;
    }

    /**
     * Sets a new oenNumbers
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleOENumbersRecordType[] $oenNumbers
     * @return self
     */
    public function setOenNumbers(array $oenNumbers)
    {
        $this->oenNumbers = $oenNumbers;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ReplacedByNumbersRecordType $array
     */
    public function addToReplacedByNumber(\Baumeister\TecDocClient\Generated\ReplacedByNumbersRecordType $array)
    {
        $this->replacedByNumber[] = $array;
        return $this;
    }

    /**
     * isset replacedByNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacedByNumber($index)
    {
        return isset($this->replacedByNumber[$index]);
    }

    /**
     * unset replacedByNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacedByNumber($index)
    {
        unset($this->replacedByNumber[$index]);
    }

    /**
     * Gets as replacedByNumber
     *
     * @return \Baumeister\TecDocClient\Generated\ReplacedByNumbersRecordType[]
     */
    public function getReplacedByNumber()
    {
        return $this->replacedByNumber;
    }

    /**
     * Sets a new replacedByNumber
     *
     * @param \Baumeister\TecDocClient\Generated\ReplacedByNumbersRecordType[] $replacedByNumber
     * @return self
     */
    public function setReplacedByNumber(array $replacedByNumber)
    {
        $this->replacedByNumber = $replacedByNumber;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ReplacedNumbersRecordType $array
     */
    public function addToReplacedNumber(\Baumeister\TecDocClient\Generated\ReplacedNumbersRecordType $array)
    {
        $this->replacedNumber[] = $array;
        return $this;
    }

    /**
     * isset replacedNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacedNumber($index)
    {
        return isset($this->replacedNumber[$index]);
    }

    /**
     * unset replacedNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacedNumber($index)
    {
        unset($this->replacedNumber[$index]);
    }

    /**
     * Gets as replacedNumber
     *
     * @return \Baumeister\TecDocClient\Generated\ReplacedNumbersRecordType[]
     */
    public function getReplacedNumber()
    {
        return $this->replacedNumber;
    }

    /**
     * Sets a new replacedNumber
     *
     * @param \Baumeister\TecDocClient\Generated\ReplacedNumbersRecordType[] $replacedNumber
     * @return self
     */
    public function setReplacedNumber(array $replacedNumber)
    {
        $this->replacedNumber = $replacedNumber;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\UsageNumbersRecordType $array
     */
    public function addToUsageNumbers(\Baumeister\TecDocClient\Generated\UsageNumbersRecordType $array)
    {
        $this->usageNumbers[] = $array;
        return $this;
    }

    /**
     * isset usageNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageNumbers($index)
    {
        return isset($this->usageNumbers[$index]);
    }

    /**
     * unset usageNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageNumbers($index)
    {
        unset($this->usageNumbers[$index]);
    }

    /**
     * Gets as usageNumbers
     *
     * @return \Baumeister\TecDocClient\Generated\UsageNumbersRecordType[]
     */
    public function getUsageNumbers()
    {
        return $this->usageNumbers;
    }

    /**
     * Sets a new usageNumbers
     *
     * @param \Baumeister\TecDocClient\Generated\UsageNumbersRecordType[] $usageNumbers
     * @return self
     */
    public function setUsageNumbers(array $usageNumbers)
    {
        $this->usageNumbers = $usageNumbers;
        return $this;
    }


}

