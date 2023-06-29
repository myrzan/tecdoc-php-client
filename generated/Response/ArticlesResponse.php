<?php

namespace Myrzan\TecDocClient\Generated\Response;

use Myrzan\TecDocClient\Generated\Record\Article;
use Myrzan\TecDocClient\Generated\Record\AssemblyGroupFacetCounts;
use Myrzan\TecDocClient\Generated\Record\CriteriaFacetCounts;
use Myrzan\TecDocClient\Generated\Record\DataSupplierFacetCounts;
use Myrzan\TecDocClient\Generated\Record\GenericArticleFacetCounts;

/**
 * Class representing ArticlesResponse
 *
 * 
 * XSD Type: articlesResponse
 */
class ArticlesResponse
{

    /**
     * The total number of parts that match this query
     *
     * @var int $totalMatchingArticles
     */
    private $totalMatchingArticles = null;

    /**
     * The maximum allowed page that can be passed in for the 'page' parameter based on the number of results and the value of the 'perPage' parameter.
     *
     * @var int $maxAllowedPage
     */
    private $maxAllowedPage = null;

    /**
     * @var Article[] $articles
     */
    private $articles = [
        
    ];

    /**
     * @var DataSupplierFacetCounts $dataSupplierFacets
     */
    private $dataSupplierFacets = null;

    /**
     * @var GenericArticleFacetCounts $genericArticleFacets
     */
    private $genericArticleFacets = null;

    /**
     * @var CriteriaFacetCounts $criteriaFacets
     */
    private $criteriaFacets = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * @var AssemblyGroupFacetCounts $assemblyGroupFacets
     */
    private $assemblyGroupFacets = null;

    /**
     * Gets as totalMatchingArticles
     *
     * The total number of parts that match this query
     *
     * @return int
     */
    public function getTotalMatchingArticles()
    {
        return $this->totalMatchingArticles;
    }

    /**
     * Sets a new totalMatchingArticles
     *
     * The total number of parts that match this query
     *
     * @param int $totalMatchingArticles
     * @return self
     */
    public function setTotalMatchingArticles($totalMatchingArticles)
    {
        $this->totalMatchingArticles = $totalMatchingArticles;
        return $this;
    }

    /**
     * Gets as maxAllowedPage
     *
     * The maximum allowed page that can be passed in for the 'page' parameter based on the number of results and the value of the 'perPage' parameter.
     *
     * @return int
     */
    public function getMaxAllowedPage()
    {
        return $this->maxAllowedPage;
    }

    /**
     * Sets a new maxAllowedPage
     *
     * The maximum allowed page that can be passed in for the 'page' parameter based on the number of results and the value of the 'perPage' parameter.
     *
     * @param int $maxAllowedPage
     * @return self
     */
    public function setMaxAllowedPage($maxAllowedPage)
    {
        $this->maxAllowedPage = $maxAllowedPage;
        return $this;
    }

    /**
     * Adds as articles
     *
     * @return self
     * @param Article $articles
     */
    public function addToArticles(Article $articles)
    {
        $this->articles[] = $articles;
        return $this;
    }

    /**
     * isset articles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticles($index)
    {
        return isset($this->articles[$index]);
    }

    /**
     * unset articles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticles($index)
    {
        unset($this->articles[$index]);
    }

    /**
     * Gets as articles
     *
     * @return Article[]
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Sets a new articles
     *
     * @param Article[] $articles
     * @return self
     */
    public function setArticles(array $articles)
    {
        $this->articles = $articles;
        return $this;
    }

    /**
     * Gets as dataSupplierFacets
     *
     * @return DataSupplierFacetCounts
     */
    public function getDataSupplierFacets()
    {
        return $this->dataSupplierFacets;
    }

    /**
     * Sets a new dataSupplierFacets
     *
     * @param DataSupplierFacetCounts $dataSupplierFacets
     * @return self
     */
    public function setDataSupplierFacets(DataSupplierFacetCounts $dataSupplierFacets)
    {
        $this->dataSupplierFacets = $dataSupplierFacets;
        return $this;
    }

    /**
     * Gets as genericArticleFacets
     *
     * @return GenericArticleFacetCounts
     */
    public function getGenericArticleFacets()
    {
        return $this->genericArticleFacets;
    }

    /**
     * Sets a new genericArticleFacets
     *
     * @param GenericArticleFacetCounts $genericArticleFacets
     * @return self
     */
    public function setGenericArticleFacets(GenericArticleFacetCounts $genericArticleFacets)
    {
        $this->genericArticleFacets = $genericArticleFacets;
        return $this;
    }

    /**
     * Gets as criteriaFacets
     *
     * @return CriteriaFacetCounts
     */
    public function getCriteriaFacets()
    {
        return $this->criteriaFacets;
    }

    /**
     * Sets a new criteriaFacets
     *
     * @param CriteriaFacetCounts $criteriaFacets
     * @return self
     */
    public function setCriteriaFacets(CriteriaFacetCounts $criteriaFacets)
    {
        $this->criteriaFacets = $criteriaFacets;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusText
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Sets a new statusText
     *
     * @param string $statusText
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
        return $this;
    }

    /**
     * Gets as assemblyGroupFacets
     *
     * @return AssemblyGroupFacetCounts
     */
    public function getAssemblyGroupFacets()
    {
        return $this->assemblyGroupFacets;
    }

    /**
     * Sets a new assemblyGroupFacets
     *
     * @param AssemblyGroupFacetCounts $assemblyGroupFacets
     * @return self
     */
    public function setAssemblyGroupFacets(AssemblyGroupFacetCounts $assemblyGroupFacets)
    {
        $this->assemblyGroupFacets = $assemblyGroupFacets;
        return $this;
    }


}

