<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\ArticleRef;

/**
 * Class representing OEArticle
 *
 * 
 * XSD Type: OEArticleRecord
 */
class OEArticle
{

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
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $genericArticleDescription
     */
    private $genericArticleDescription = null;

    /**
     * This article has been replaced by these articles
     *
     * @var string[] $replacedByArticles
     */
    private $replacedByArticles = [
        
    ];

    /**
     * @var Criteria[] $tecDocCriteria
     */
    private $tecDocCriteria = [
        
    ];

    /**
     * @var OEAttribute[] $oeAttributes
     */
    private $oeAttributes = [
        
    ];

    /**
     * @var ArticleRef[] $matchingAftermarketArticles
     */
    private $matchingAftermarketArticles = [
        
    ];

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
     * Adds as replacedByArticles
     *
     * This article has been replaced by these articles
     *
     * @return self
     * @param string $replacedByArticles
     */
    public function addToReplacedByArticles($replacedByArticles)
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
     * @return string[]
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
     * @param string[] $replacedByArticles
     * @return self
     */
    public function setReplacedByArticles(array $replacedByArticles)
    {
        $this->replacedByArticles = $replacedByArticles;
        return $this;
    }

    /**
     * Adds as tecDocCriteria
     *
     * @param Criteria $tecDocCriteria
     *@return self
     */
    public function addToTecDocCriteria(Criteria $tecDocCriteria)
    {
        $this->tecDocCriteria[] = $tecDocCriteria;
        return $this;
    }

    /**
     * isset tecDocCriteria
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTecDocCriteria($index)
    {
        return isset($this->tecDocCriteria[$index]);
    }

    /**
     * unset tecDocCriteria
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTecDocCriteria($index)
    {
        unset($this->tecDocCriteria[$index]);
    }

    /**
     * Gets as tecDocCriteria
     *
     * @return Criteria[]
     */
    public function getTecDocCriteria()
    {
        return $this->tecDocCriteria;
    }

    /**
     * Sets a new tecDocCriteria
     *
     * @param Criteria[] $tecDocCriteria
     * @return self
     */
    public function setTecDocCriteria(array $tecDocCriteria)
    {
        $this->tecDocCriteria = $tecDocCriteria;
        return $this;
    }

    /**
     * Adds as oeAttributes
     *
     * @param OEAttribute $oeAttributes
     *@return self
     */
    public function addToOeAttributes(OEAttribute $oeAttributes)
    {
        $this->oeAttributes[] = $oeAttributes;
        return $this;
    }

    /**
     * isset oeAttributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOeAttributes($index)
    {
        return isset($this->oeAttributes[$index]);
    }

    /**
     * unset oeAttributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOeAttributes($index)
    {
        unset($this->oeAttributes[$index]);
    }

    /**
     * Gets as oeAttributes
     *
     * @return OEAttribute[]
     */
    public function getOeAttributes()
    {
        return $this->oeAttributes;
    }

    /**
     * Sets a new oeAttributes
     *
     * @param OEAttribute[] $oeAttributes
     * @return self
     */
    public function setOeAttributes(array $oeAttributes)
    {
        $this->oeAttributes = $oeAttributes;
        return $this;
    }

    /**
     * Adds as matchingAftermarketArticles
     *
     * @param ArticleRef $matchingAftermarketArticles
     *@return self
     */
    public function addToMatchingAftermarketArticles(ArticleRef $matchingAftermarketArticles)
    {
        $this->matchingAftermarketArticles[] = $matchingAftermarketArticles;
        return $this;
    }

    /**
     * isset matchingAftermarketArticles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchingAftermarketArticles($index)
    {
        return isset($this->matchingAftermarketArticles[$index]);
    }

    /**
     * unset matchingAftermarketArticles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchingAftermarketArticles($index)
    {
        unset($this->matchingAftermarketArticles[$index]);
    }

    /**
     * Gets as matchingAftermarketArticles
     *
     * @return ArticleRef[]
     */
    public function getMatchingAftermarketArticles()
    {
        return $this->matchingAftermarketArticles;
    }

    /**
     * Sets a new matchingAftermarketArticles
     *
     * @param ArticleRef[] $matchingAftermarketArticles
     * @return self
     */
    public function setMatchingAftermarketArticles(array $matchingAftermarketArticles)
    {
        $this->matchingAftermarketArticles = $matchingAftermarketArticles;
        return $this;
    }


}

