<?php

namespace Baumeister\TecDocClient\Generated;

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
     * @var \Baumeister\TecDocClient\Generated\OEArticleRecordType[] $oeArticles
     */
    private $oeArticles = [
        
    ];

    /**
     * @var \Baumeister\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets
     */
    private $aftermarketDataSupplierFacets = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets
     */
    private $genericArticleFacets = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets
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
     * @param \Baumeister\TecDocClient\Generated\OEArticleRecordType $oeArticles
     */
    public function addToOeArticles(\Baumeister\TecDocClient\Generated\OEArticleRecordType $oeArticles)
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
     * @return \Baumeister\TecDocClient\Generated\OEArticleRecordType[]
     */
    public function getOeArticles()
    {
        return $this->oeArticles;
    }

    /**
     * Sets a new oeArticles
     *
     * @param \Baumeister\TecDocClient\Generated\OEArticleRecordType[] $oeArticles
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
     * @return \Baumeister\TecDocClient\Generated\DataSupplierFacetCountsType
     */
    public function getAftermarketDataSupplierFacets()
    {
        return $this->aftermarketDataSupplierFacets;
    }

    /**
     * Sets a new aftermarketDataSupplierFacets
     *
     * @param \Baumeister\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets
     * @return self
     */
    public function setAftermarketDataSupplierFacets(\Baumeister\TecDocClient\Generated\DataSupplierFacetCountsType $aftermarketDataSupplierFacets)
    {
        $this->aftermarketDataSupplierFacets = $aftermarketDataSupplierFacets;
        return $this;
    }

    /**
     * Gets as genericArticleFacets
     *
     * @return \Baumeister\TecDocClient\Generated\GenericArticleFacetCountsType
     */
    public function getGenericArticleFacets()
    {
        return $this->genericArticleFacets;
    }

    /**
     * Sets a new genericArticleFacets
     *
     * @param \Baumeister\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets
     * @return self
     */
    public function setGenericArticleFacets(\Baumeister\TecDocClient\Generated\GenericArticleFacetCountsType $genericArticleFacets)
    {
        $this->genericArticleFacets = $genericArticleFacets;
        return $this;
    }

    /**
     * Gets as assemblyGroupFacets
     *
     * @return \Baumeister\TecDocClient\Generated\AssemblyGroupFacetCountsType
     */
    public function getAssemblyGroupFacets()
    {
        return $this->assemblyGroupFacets;
    }

    /**
     * Sets a new assemblyGroupFacets
     *
     * @param \Baumeister\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets
     * @return self
     */
    public function setAssemblyGroupFacets(\Baumeister\TecDocClient\Generated\AssemblyGroupFacetCountsType $assemblyGroupFacets)
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

