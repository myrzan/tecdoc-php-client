<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticlesResponseType
 *
 * 
 * XSD Type: articlesResponse
 */
class ArticlesResponseType extends ArticlesResponseSrcType
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
     * @var \Myrzan\TecDocClient\Generated\ArticleRecordType[] $articles
     */
    private $articles = [
        
    ];

    /**
     * @var \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $dataSupplierFacets
     */
    private $dataSupplierFacets = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets
     */
    private $genericArticleFacets = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaFacetCountsType $criteriaFacets
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
     * @var \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets
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
     * @param \Myrzan\TecDocClient\Generated\ArticleRecordType $articles
     */
    public function addToArticles(\Myrzan\TecDocClient\Generated\ArticleRecordType $articles)
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
     * @return \Myrzan\TecDocClient\Generated\ArticleRecordType[]
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Sets a new articles
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleRecordType[] $articles
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
     * @return \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType
     */
    public function getDataSupplierFacets()
    {
        return $this->dataSupplierFacets;
    }

    /**
     * Sets a new dataSupplierFacets
     *
     * @param \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $dataSupplierFacets
     * @return self
     */
    public function setDataSupplierFacets(\Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $dataSupplierFacets)
    {
        $this->dataSupplierFacets = $dataSupplierFacets;
        return $this;
    }

    /**
     * Gets as genericArticleFacets
     *
     * @return \Myrzan\TecDocClient\Generated\GenericArticleFacetCountsType
     */
    public function getGenericArticleFacets()
    {
        return $this->genericArticleFacets;
    }

    /**
     * Sets a new genericArticleFacets
     *
     * @param \Myrzan\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets
     * @return self
     */
    public function setGenericArticleFacets(\Myrzan\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets)
    {
        $this->genericArticleFacets = $genericArticleFacets;
        return $this;
    }

    /**
     * Gets as criteriaFacets
     *
     * @return \Myrzan\TecDocClient\Generated\CriteriaFacetCountsType
     */
    public function getCriteriaFacets()
    {
        return $this->criteriaFacets;
    }

    /**
     * Sets a new criteriaFacets
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaFacetCountsType $criteriaFacets
     * @return self
     */
    public function setCriteriaFacets(\Myrzan\TecDocClient\Generated\CriteriaFacetCountsType $criteriaFacets)
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
     * @return \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountsType
     */
    public function getAssemblyGroupFacets()
    {
        return $this->assemblyGroupFacets;
    }

    /**
     * Sets a new assemblyGroupFacets
     *
     * @param \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets
     * @return self
     */
    public function setAssemblyGroupFacets(\Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets)
    {
        $this->assemblyGroupFacets = $assemblyGroupFacets;
        return $this;
    }


}

