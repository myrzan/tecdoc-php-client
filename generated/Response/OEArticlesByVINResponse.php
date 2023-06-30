<?php

namespace Myrzan\TecDocClient\Generated\Response;

use Myrzan\TecDocClient\Generated\Record\AssemblyGroupFacetCounts;
use Myrzan\TecDocClient\Generated\Record\DataSupplierFacetCounts;
use Myrzan\TecDocClient\Generated\Record\GenericArticleFacetCounts;
use Myrzan\TecDocClient\Generated\Record\OEArticle;

/**
 * Class representing OEArticlesByVINResponse
 *
 * 
 * XSD Type: oEArticlesByVINResponse
 */
class OEArticlesByVINResponse
{

    /**
     * The total number of oe parts that match this query
     *
     * @var int $totalMatchingOEArticles
     */
    private $totalMatchingOEArticles = null;

    /**
     * @var OEArticle[] $oeArticles
     */
    private $oeArticles = [
        
    ];

    /**
     * @var DataSupplierFacetCounts $aftermarketDataSupplierFacets
     */
    private $aftermarketDataSupplierFacets = null;

    /**
     * @var GenericArticleFacetCounts $genericArticleFacets
     */
    private $genericArticleFacets = null;

    /**
     * @var AssemblyGroupFacetCounts $assemblyGroupFacets
     */
    private $assemblyGroupFacets = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Gets as totalMatchingOEArticles
     *
     * The total number of oe parts that match this query
     *
     * @return int
     */
    public function getTotalMatchingOEArticles()
    {
        return $this->totalMatchingOEArticles;
    }

    /**
     * Sets a new totalMatchingOEArticles
     *
     * The total number of oe parts that match this query
     *
     * @param int $totalMatchingOEArticles
     * @return self
     */
    public function setTotalMatchingOEArticles($totalMatchingOEArticles)
    {
        $this->totalMatchingOEArticles = $totalMatchingOEArticles;
        return $this;
    }

    /**
     * Adds as oeArticles
     *
     * @param OEArticle $oeArticles
     * @return self
     */
    public function addToOeArticles(OEArticle $oeArticles)
    {
        $this->oeArticles[] = $oeArticles;
        return $this;
    }

    /**
     * isset oeArticles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOeArticles($index)
    {
        return isset($this->oeArticles[$index]);
    }

    /**
     * unset oeArticles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOeArticles($index)
    {
        unset($this->oeArticles[$index]);
    }

    /**
     * Gets as oeArticles
     *
     * @return OEArticle[]
     */
    public function getOeArticles()
    {
        return $this->oeArticles;
    }

    /**
     * Sets a new oeArticles
     *
     * @param OEArticle[] $oeArticles
     * @return self
     */
    public function setOeArticles(array $oeArticles)
    {
        $this->oeArticles = $oeArticles;
        return $this;
    }

    /**
     * Gets as aftermarketDataSupplierFacets
     *
     * @return DataSupplierFacetCounts
     */
    public function getAftermarketDataSupplierFacets()
    {
        return $this->aftermarketDataSupplierFacets;
    }

    /**
     * Sets a new aftermarketDataSupplierFacets
     *
     * @param DataSupplierFacetCounts $aftermarketDataSupplierFacets
     * @return self
     */
    public function setAftermarketDataSupplierFacets(DataSupplierFacetCounts $aftermarketDataSupplierFacets)
    {
        $this->aftermarketDataSupplierFacets = $aftermarketDataSupplierFacets;
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


}

