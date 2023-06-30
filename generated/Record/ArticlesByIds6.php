<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\ArticleDirectSearchById3;
use Myrzan\TecDocClient\Generated\Record\ArticleDocuments2;

/**
 * Class representing ArticlesByIds6
 *
 * 
 * XSD Type: articlesByIds6Record
 */
class ArticlesByIds6 
{

    /**
     * @var AssignedArticleAttributs2[] $articleAttributes
     */
    private $articleAttributes = null;

    /**
     * @var ArticleDocuments2[] $articleDocuments
     */
    private $articleDocuments = null;

    /**
     * @var AssignedArticleInfos[] $articleInfo
     */
    private $articleInfo = null;

    /**
     * @var ArticlePrices[] $articlePrices
     */
    private $articlePrices = null;

    /**
     * @var ThumbnailByArticleId[] $articleThumbnails
     */
    private $articleThumbnails = null;

    /**
     * @var AssignedArticleById3 $assignedArticle
     */
    private $assignedArticle = null;

    /**
     * @var ArticleDirectSearchById3 $directArticle
     */
    private $directArticle = null;

    /**
     * @var EanNumbers[] $eanNumber
     */
    private $eanNumber = null;

    /**
     * @var ImmediateAttributs2[] $immediateAttributs
     */
    private $immediateAttributs = null;

    /**
     * @var ImmediateInfos[] $immediateInfo
     */
    private $immediateInfo = null;

    /**
     * @var MainArticles[] $mainArticle
     */
    private $mainArticle = null;

    /**
     * @var ArticlePricesNormalAustausch[] $normalAustauschPrice
     */
    private $normalAustauschPrice = null;

    /**
     * @var ArticleOENumbers[] $oenNumbers
     */
    private $oenNumbers = null;

    /**
     * @var ReplacedByNumbers[] $replacedByNumber
     */
    private $replacedByNumber = null;

    /**
     * @var ReplacedNumbers[] $replacedNumber
     */
    private $replacedNumber = null;

    /**
     * @var UsageNumbers2[] $usageNumbers2
     */
    private $usageNumbers2 = null;

    /**
     * Adds as array
     *
     * @param AssignedArticleAttributs2 $array
     * @return self
     */
    public function addToArticleAttributes(AssignedArticleAttributs2 $array)
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
     * @return AssignedArticleAttributs2[]
     */
    public function getArticleAttributes()
    {
        return $this->articleAttributes;
    }

    /**
     * Sets a new articleAttributes
     *
     * @param AssignedArticleAttributs2[] $articleAttributes
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
     * @param ArticleDocuments2 $array
     * @return self
     */
    public function addToArticleDocuments(ArticleDocuments2 $array)
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
     * @return ArticleDocuments2[]
     */
    public function getArticleDocuments()
    {
        return $this->articleDocuments;
    }

    /**
     * Sets a new articleDocuments
     *
     * @param ArticleDocuments2[] $articleDocuments
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
     * @param AssignedArticleInfos $array
     * @return self
     */
    public function addToArticleInfo(AssignedArticleInfos $array)
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
     * @return AssignedArticleInfos[]
     */
    public function getArticleInfo()
    {
        return $this->articleInfo;
    }

    /**
     * Sets a new articleInfo
     *
     * @param AssignedArticleInfos[] $articleInfo
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
     * @param ArticlePrices $array
     * @return self
     */
    public function addToArticlePrices(ArticlePrices $array)
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
     * @return ArticlePrices[]
     */
    public function getArticlePrices()
    {
        return $this->articlePrices;
    }

    /**
     * Sets a new articlePrices
     *
     * @param ArticlePrices[] $articlePrices
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
     * @param ThumbnailByArticleId $array
     * @return self
     */
    public function addToArticleThumbnails(ThumbnailByArticleId $array)
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
     * @return ThumbnailByArticleId[]
     */
    public function getArticleThumbnails()
    {
        return $this->articleThumbnails;
    }

    /**
     * Sets a new articleThumbnails
     *
     * @param ThumbnailByArticleId[] $articleThumbnails
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
     * @return AssignedArticleById3
     */
    public function getAssignedArticle()
    {
        return $this->assignedArticle;
    }

    /**
     * Sets a new assignedArticle
     *
     * @param AssignedArticleById3 $assignedArticle
     * @return self
     */
    public function setAssignedArticle(AssignedArticleById3 $assignedArticle)
    {
        $this->assignedArticle = $assignedArticle;
        return $this;
    }

    /**
     * Gets as directArticle
     *
     * @return ArticleDirectSearchById3
     */
    public function getDirectArticle()
    {
        return $this->directArticle;
    }

    /**
     * Sets a new directArticle
     *
     * @param ArticleDirectSearchById3 $directArticle
     * @return self
     */
    public function setDirectArticle(ArticleDirectSearchById3 $directArticle)
    {
        $this->directArticle = $directArticle;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param EanNumbers $array
     * @return self
     */
    public function addToEanNumber(EanNumbers $array)
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
     * @return EanNumbers[]
     */
    public function getEanNumber()
    {
        return $this->eanNumber;
    }

    /**
     * Sets a new eanNumber
     *
     * @param EanNumbers[] $eanNumber
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
     * @param ImmediateAttributs2 $array
     * @return self
     */
    public function addToImmediateAttributs(ImmediateAttributs2 $array)
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
     * @return ImmediateAttributs2[]
     */
    public function getImmediateAttributs()
    {
        return $this->immediateAttributs;
    }

    /**
     * Sets a new immediateAttributs
     *
     * @param ImmediateAttributs2[] $immediateAttributs
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
     * @param ImmediateInfos $array
     * @return self
     */
    public function addToImmediateInfo(ImmediateInfos $array)
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
     * @return ImmediateInfos[]
     */
    public function getImmediateInfo()
    {
        return $this->immediateInfo;
    }

    /**
     * Sets a new immediateInfo
     *
     * @param ImmediateInfos[] $immediateInfo
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
     * @param MainArticles $array
     * @return self
     */
    public function addToMainArticle(MainArticles $array)
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
     * @return MainArticles[]
     */
    public function getMainArticle()
    {
        return $this->mainArticle;
    }

    /**
     * Sets a new mainArticle
     *
     * @param MainArticles[] $mainArticle
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
     * @param ArticlePricesNormalAustausch $array
     * @return self
     */
    public function addToNormalAustauschPrice(ArticlePricesNormalAustausch $array)
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
     * @return ArticlePricesNormalAustausch[]
     */
    public function getNormalAustauschPrice()
    {
        return $this->normalAustauschPrice;
    }

    /**
     * Sets a new normalAustauschPrice
     *
     * @param ArticlePricesNormalAustausch[] $normalAustauschPrice
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
     * @param ArticleOENumbers $array
     * @return self
     */
    public function addToOenNumbers(ArticleOENumbers $array)
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
     * @return ArticleOENumbers[]
     */
    public function getOenNumbers()
    {
        return $this->oenNumbers;
    }

    /**
     * Sets a new oenNumbers
     *
     * @param ArticleOENumbers[] $oenNumbers
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
     * @param ReplacedByNumbers $array
     * @return self
     */
    public function addToReplacedByNumber(ReplacedByNumbers $array)
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
     * @return ReplacedByNumbers[]
     */
    public function getReplacedByNumber()
    {
        return $this->replacedByNumber;
    }

    /**
     * Sets a new replacedByNumber
     *
     * @param ReplacedByNumbers[] $replacedByNumber
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
     * @param ReplacedNumbers $array
     * @return self
     */
    public function addToReplacedNumber(ReplacedNumbers $array)
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
     * @return ReplacedNumbers[]
     */
    public function getReplacedNumber()
    {
        return $this->replacedNumber;
    }

    /**
     * Sets a new replacedNumber
     *
     * @param ReplacedNumbers[] $replacedNumber
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
     * @param UsageNumbers2 $array
     * @return self
     */
    public function addToUsageNumbers2(UsageNumbers2 $array)
    {
        $this->usageNumbers2[] = $array;
        return $this;
    }

    /**
     * isset usageNumbers2
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageNumbers2($index)
    {
        return isset($this->usageNumbers2[$index]);
    }

    /**
     * unset usageNumbers2
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageNumbers2($index)
    {
        unset($this->usageNumbers2[$index]);
    }

    /**
     * Gets as usageNumbers2
     *
     * @return UsageNumbers2[]
     */
    public function getUsageNumbers2()
    {
        return $this->usageNumbers2;
    }

    /**
     * Sets a new usageNumbers2
     *
     * @param UsageNumbers2[] $usageNumbers2
     * @return self
     */
    public function setUsageNumbers2(array $usageNumbers2)
    {
        $this->usageNumbers2 = $usageNumbers2;
        return $this;
    }


}

