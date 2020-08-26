<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing OEArticlesByVINRequestType
 *
 * 
 * XSD Type: oEArticlesByVINRequest
 */
class OEArticlesByVINRequestType extends OEArticlesByVINRequestSrcType
{

    /**
     * @var string $vin
     */
    private $vin = null;

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @var int[] $aftermarketDataSupplierIds
     */
    private $aftermarketDataSupplierIds = [
        
    ];

    /**
     * Only return OE parts that belong to these generic article
     *
     * @var int[] $genericArticleIds
     */
    private $genericArticleIds = [
        
    ];

    /**
     * Only return OE parts that belong to these assembly group nodes
     *
     * @var int[] $assemblyGroupNodeIds
     */
    private $assemblyGroupNodeIds = [
        
    ];

    /**
     * The TecDoc Language Code. Defaults to 'en'
     *
     * @var string $lang
     */
    private $lang = null;

    /**
     * Max is 100. Defaults to 10
     *
     * @var int $perPage
     */
    private $perPage = null;

    /**
     * @var int $page
     */
    private $page = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\SortType[] $sort
     */
    private $sort = [
        
    ];

    /**
     * Defaults to false
     *
     * @var bool $includeAftermarketMatches
     */
    private $includeAftermarketMatches = null;

    /**
     * Defaults to false
     *
     * @var bool $includeGenericArticleFacets
     */
    private $includeGenericArticleFacets = null;

    /**
     * Defaults to false
     *
     * @var bool $includeAftermarketDataSupplierFacets
     */
    private $includeAftermarketDataSupplierFacets = null;

    /**
     * Options for returning assembly group facets. Defaults to false.
     *
     * @var \Myrzan\TecDocClient\Generated\AssemblyGroupFacetOptionsType $assemblyGroupFacetOptions
     */
    private $assemblyGroupFacetOptions = null;

    /**
     * Gets as vin
     *
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Sets a new vin
     *
     * @param string $vin
     * @return self
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
        return $this;
    }

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
     * Adds as aftermarketDataSupplierIds
     *
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @return self
     * @param int $aftermarketDataSupplierIds
     */
    public function addToAftermarketDataSupplierIds($aftermarketDataSupplierIds)
    {
        $this->aftermarketDataSupplierIds[] = $aftermarketDataSupplierIds;
        return $this;
    }

    /**
     * isset aftermarketDataSupplierIds
     *
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAftermarketDataSupplierIds($index)
    {
        return isset($this->aftermarketDataSupplierIds[$index]);
    }

    /**
     * unset aftermarketDataSupplierIds
     *
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAftermarketDataSupplierIds($index)
    {
        unset($this->aftermarketDataSupplierIds[$index]);
    }

    /**
     * Gets as aftermarketDataSupplierIds
     *
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @return int[]
     */
    public function getAftermarketDataSupplierIds()
    {
        return $this->aftermarketDataSupplierIds;
    }

    /**
     * Sets a new aftermarketDataSupplierIds
     *
     * Only return aftermarket parts that belong to these data supplier ids
     *
     * @param int[] $aftermarketDataSupplierIds
     * @return self
     */
    public function setAftermarketDataSupplierIds(array $aftermarketDataSupplierIds)
    {
        $this->aftermarketDataSupplierIds = $aftermarketDataSupplierIds;
        return $this;
    }

    /**
     * Adds as genericArticleIds
     *
     * Only return OE parts that belong to these generic article
     *
     * @return self
     * @param int $genericArticleIds
     */
    public function addToGenericArticleIds($genericArticleIds)
    {
        $this->genericArticleIds[] = $genericArticleIds;
        return $this;
    }

    /**
     * isset genericArticleIds
     *
     * Only return OE parts that belong to these generic article
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenericArticleIds($index)
    {
        return isset($this->genericArticleIds[$index]);
    }

    /**
     * unset genericArticleIds
     *
     * Only return OE parts that belong to these generic article
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenericArticleIds($index)
    {
        unset($this->genericArticleIds[$index]);
    }

    /**
     * Gets as genericArticleIds
     *
     * Only return OE parts that belong to these generic article
     *
     * @return int[]
     */
    public function getGenericArticleIds()
    {
        return $this->genericArticleIds;
    }

    /**
     * Sets a new genericArticleIds
     *
     * Only return OE parts that belong to these generic article
     *
     * @param int[] $genericArticleIds
     * @return self
     */
    public function setGenericArticleIds(array $genericArticleIds)
    {
        $this->genericArticleIds = $genericArticleIds;
        return $this;
    }

    /**
     * Adds as assemblyGroupNodeIds
     *
     * Only return OE parts that belong to these assembly group nodes
     *
     * @return self
     * @param int $assemblyGroupNodeIds
     */
    public function addToAssemblyGroupNodeIds($assemblyGroupNodeIds)
    {
        $this->assemblyGroupNodeIds[] = $assemblyGroupNodeIds;
        return $this;
    }

    /**
     * isset assemblyGroupNodeIds
     *
     * Only return OE parts that belong to these assembly group nodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssemblyGroupNodeIds($index)
    {
        return isset($this->assemblyGroupNodeIds[$index]);
    }

    /**
     * unset assemblyGroupNodeIds
     *
     * Only return OE parts that belong to these assembly group nodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssemblyGroupNodeIds($index)
    {
        unset($this->assemblyGroupNodeIds[$index]);
    }

    /**
     * Gets as assemblyGroupNodeIds
     *
     * Only return OE parts that belong to these assembly group nodes
     *
     * @return int[]
     */
    public function getAssemblyGroupNodeIds()
    {
        return $this->assemblyGroupNodeIds;
    }

    /**
     * Sets a new assemblyGroupNodeIds
     *
     * Only return OE parts that belong to these assembly group nodes
     *
     * @param int[] $assemblyGroupNodeIds
     * @return self
     */
    public function setAssemblyGroupNodeIds(array $assemblyGroupNodeIds)
    {
        $this->assemblyGroupNodeIds = $assemblyGroupNodeIds;
        return $this;
    }

    /**
     * Gets as lang
     *
     * The TecDoc Language Code. Defaults to 'en'
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
     * The TecDoc Language Code. Defaults to 'en'
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
     * Gets as perPage
     *
     * Max is 100. Defaults to 10
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * Sets a new perPage
     *
     * Max is 100. Defaults to 10
     *
     * @param int $perPage
     * @return self
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * Gets as page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * @param int $page
     * @return self
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * Adds as sort
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\SortType $sort
     */
    public function addToSort(\Myrzan\TecDocClient\Generated\SortType $sort)
    {
        $this->sort[] = $sort;
        return $this;
    }

    /**
     * isset sort
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSort($index)
    {
        return isset($this->sort[$index]);
    }

    /**
     * unset sort
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSort($index)
    {
        unset($this->sort[$index]);
    }

    /**
     * Gets as sort
     *
     * @return \Myrzan\TecDocClient\Generated\SortType[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * @param \Myrzan\TecDocClient\Generated\SortType[] $sort
     * @return self
     */
    public function setSort(array $sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as includeAftermarketMatches
     *
     * Defaults to false
     *
     * @return bool
     */
    public function getIncludeAftermarketMatches()
    {
        return $this->includeAftermarketMatches;
    }

    /**
     * Sets a new includeAftermarketMatches
     *
     * Defaults to false
     *
     * @param bool $includeAftermarketMatches
     * @return self
     */
    public function setIncludeAftermarketMatches($includeAftermarketMatches)
    {
        $this->includeAftermarketMatches = $includeAftermarketMatches;
        return $this;
    }

    /**
     * Gets as includeGenericArticleFacets
     *
     * Defaults to false
     *
     * @return bool
     */
    public function getIncludeGenericArticleFacets()
    {
        return $this->includeGenericArticleFacets;
    }

    /**
     * Sets a new includeGenericArticleFacets
     *
     * Defaults to false
     *
     * @param bool $includeGenericArticleFacets
     * @return self
     */
    public function setIncludeGenericArticleFacets($includeGenericArticleFacets)
    {
        $this->includeGenericArticleFacets = $includeGenericArticleFacets;
        return $this;
    }

    /**
     * Gets as includeAftermarketDataSupplierFacets
     *
     * Defaults to false
     *
     * @return bool
     */
    public function getIncludeAftermarketDataSupplierFacets()
    {
        return $this->includeAftermarketDataSupplierFacets;
    }

    /**
     * Sets a new includeAftermarketDataSupplierFacets
     *
     * Defaults to false
     *
     * @param bool $includeAftermarketDataSupplierFacets
     * @return self
     */
    public function setIncludeAftermarketDataSupplierFacets($includeAftermarketDataSupplierFacets)
    {
        $this->includeAftermarketDataSupplierFacets = $includeAftermarketDataSupplierFacets;
        return $this;
    }

    /**
     * Gets as assemblyGroupFacetOptions
     *
     * Options for returning assembly group facets. Defaults to false.
     *
     * @return \Myrzan\TecDocClient\Generated\AssemblyGroupFacetOptionsType
     */
    public function getAssemblyGroupFacetOptions()
    {
        return $this->assemblyGroupFacetOptions;
    }

    /**
     * Sets a new assemblyGroupFacetOptions
     *
     * Options for returning assembly group facets. Defaults to false.
     *
     * @param \Myrzan\TecDocClient\Generated\AssemblyGroupFacetOptionsType $assemblyGroupFacetOptions
     * @return self
     */
    public function setAssemblyGroupFacetOptions(\Myrzan\TecDocClient\Generated\AssemblyGroupFacetOptionsType $assemblyGroupFacetOptions)
    {
        $this->assemblyGroupFacetOptions = $assemblyGroupFacetOptions;
        return $this;
    }


}

