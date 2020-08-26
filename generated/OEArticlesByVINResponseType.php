<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing OEArticlesByVINResponseType
 *
 * 
 * XSD Type: oEArticlesByVINResponse
 */
class OEArticlesByVINResponseType extends OEArticlesByVINResponseSrcType
{

    /**
     * The total number of oe parts that match this query
     *
     * @var int $totalMatchingOEArticles
     */
    private $totalMatchingOEArticles = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\OEArticleRecordType[] $oeArticles
     */
    private $oeArticles = [
        
    ];

    /**
     * @var \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets
     */
    private $aftermarketDataSupplierFacets = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets
     */
    private $genericArticleFacets = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets
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
     * @return self
     * @param \Myrzan\TecDocClient\Generated\OEArticleRecordType $oeArticles
     */
    public function addToOeArticles(\Myrzan\TecDocClient\Generated\OEArticleRecordType $oeArticles)
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
     * @return \Myrzan\TecDocClient\Generated\OEArticleRecordType[]
     */
    public function getOeArticles()
    {
        return $this->oeArticles;
    }

    /**
     * Sets a new oeArticles
     *
     * @param \Myrzan\TecDocClient\Generated\OEArticleRecordType[] $oeArticles
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
     * @return \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType
     */
    public function getAftermarketDataSupplierFacets()
    {
        return $this->aftermarketDataSupplierFacets;
    }

    /**
     * Sets a new aftermarketDataSupplierFacets
     *
     * @param \Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets
     * @return self
     */
    public function setAftermarketDataSupplierFacets(\Myrzan\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets)
    {
        $this->aftermarketDataSupplierFacets = $aftermarketDataSupplierFacets;
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

