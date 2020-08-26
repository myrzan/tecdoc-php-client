<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticlesRequestType
 *
 * 
 * XSD Type: articlesRequest
 */
class ArticlesRequestType extends ArticlesRequestSrcType
{

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
     * @var string $searchQuery
     */
    private $searchQuery = null;

    /**
     * 0: Article Number (DEFAULT), 1: OE Number, 2: Trade Number, 3: Comparable Number, 4: Replacement Number, 5: Replaced Number, 6: EAN Number, 7: Criteria Number, 10: Any Number, 99: Free Text
     *
     * @var int $searchType
     */
    private $searchType = null;

    /**
     * exact: Exact Match (DEFAULT), prefix: Prefix Match, suffix: Suffix Match, prefix_or_suffix: Prefix or Suffix Matching
     *
     * @var string $searchMatchType
     */
    private $searchMatchType = null;

    /**
     * Only return parts matching these legacy article ids
     *
     * @var int[] $legacyArticleIds
     */
    private $legacyArticleIds = [
        
    ];

    /**
     * Only return parts that belong to these data supplier ids
     *
     * @var int[] $dataSupplierIds
     */
    private $dataSupplierIds = [
        
    ];

    /**
     * Only return parts that belong to these generic article
     *
     * @var int[] $genericArticleIds
     */
    private $genericArticleIds = [
        
    ];

    /**
     * Only return parts that belong to these assembly group nodes
     *
     * @var int[] $assemblyGroupNodeIds
     */
    private $assemblyGroupNodeIds = [
        
    ];

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaFilterType[] $criteriaFilters
     */
    private $criteriaFilters = [
        
    ];

    /**
     * Filter to parts that are linked to this target id (also requires the linkingTargetType)
     *
     * @var int $linkageTargetId
     */
    private $linkageTargetId = null;

    /**
     * 'P': Vehicle Type (Passenger + Motorcycle + LCV), 'V': Passenger Car, 'L': LCV, 'B': Motorcycle, 'O': CV Type (Commercial Vehicle + Tractor), 'C': Commercial Vehicle, 'T': Tractor, 'M': Engine, 'A': Axle, 'K': CV Body Type
     *
     * @var string $linkageTargetType
     */
    private $linkageTargetType = null;

    /**
     * Specify a linkage-specific country to filter article linkages and criteria on. Defaults to 'articleCountry' value.
     *
     * @var string $linkageTargetCountry
     */
    private $linkageTargetCountry = null;

    /**
     * Only include articles added since this date (YYYY-MM-DD).
     *
     * @var string $newArticlesDateFrom
     */
    private $newArticlesDateFrom = null;

    /**
     * Only include articles added up until this date (YYYY-MM-DD).
     *
     * @var string $newArticlesDateTo
     */
    private $newArticlesDateTo = null;

    /**
     * Only include articles with linkages added since this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @var string $newLinkagesDateFrom
     */
    private $newLinkagesDateFrom = null;

    /**
     * Only include articles with linkages added up until this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @var string $newLinkagesDateTo
     */
    private $newLinkagesDateTo = null;

    /**
     * Only include new linkages with this mfr id. Only valid if using the newLinkagesDateFrom or newLinkagesDateTo field.
     *
     * @var int $newLinkagesMfrId
     */
    private $newLinkagesMfrId = null;

    /**
     * The TecDoc Language Code. Defaults to 'en'
     *
     * @var string $lang
     */
    private $lang = null;

    /**
     * How many article results per page you want. Defaults to 10. Note: Increasing this value will decrease the 'maxAllowedPage' in the response.
     *
     * @var int $perPage
     */
    private $perPage = null;

    /**
     * Which page of article results to show. Defaults to 1. You can only page through the first ~10,000 (exact limit subject to change) results using this method. The 'maxAllowedPage' in the response will tell you what the current limit is.
     *
     * @var int $page
     */
    private $page = null;

    /**
     * How many linkage results per page you want. Defaults to 10 (subject to change). Only applicable if includeLinkages is true.
     *
     * @var int $linkagesPerPage
     */
    private $linkagesPerPage = null;

    /**
     * Which page of linkage results to show. Only applicable if includeLinkages is true.
     *
     * @var int $linkagesPage
     */
    private $linkagesPage = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\SortType[] $sort
     */
    private $sort = [
        
    ];

    /**
     * Include ALL Data in the response. Defaults to false.
     *
     * @var bool $includeAll
     */
    private $includeAll = null;

    /**
     * Include Misc Article Data. Defaults to false.
     *
     * @var bool $includeMisc
     */
    private $includeMisc = null;

    /**
     * Include Generic Article Information in the response. Defaults to false.
     *
     * @var bool $includeGenericArticles
     */
    private $includeGenericArticles = null;

    /**
     * Include the Article Text in the response. Defaults to false.
     *
     * @var bool $includeArticleText
     */
    private $includeArticleText = null;

    /**
     * Include Global Trade Identification Numbers (GTINs) associated with the part in the response. Note: This includes EANs. Defaults to false.
     *
     * @var bool $includeGTINs
     */
    private $includeGTINs = null;

    /**
     * Include Trade Numbers in the response. Defaults to false.
     *
     * @var bool $includeTradeNumbers
     */
    private $includeTradeNumbers = null;

    /**
     * Include OEM Numbers in the response. Defaults to false.
     *
     * @var bool $includeOEMNumbers
     */
    private $includeOEMNumbers = null;

    /**
     * Include information about articles replaced by this part in the response. Defaults to false.
     *
     * @var bool $includeReplacesArticles
     */
    private $includeReplacesArticles = null;

    /**
     * Include information about articles that replace this part in the response. Defaults to false.
     *
     * @var bool $includeReplacedByArticles
     */
    private $includeReplacedByArticles = null;

    /**
     * Include Article Criteria in the response. Defaults to false.
     *
     * @var bool $includeArticleCriteria
     */
    private $includeArticleCriteria = null;

    /**
     * Include Linkage and Linkage Criteria information in the response (only valid if filtering by linkage id). Defaults to false.
     *
     * @var bool $includeLinkages
     */
    private $includeLinkages = null;

    /**
     * Include PDFs in the response. Defaults to false.
     *
     * @var bool $includePDFs
     */
    private $includePDFs = null;

    /**
     * Include Images in the response. Defaults to false.
     *
     * @var bool $includeImages
     */
    private $includeImages = null;

    /**
     * Defaults to false
     *
     * @var bool $includeDataSupplierFacets
     */
    private $includeDataSupplierFacets = null;

    /**
     * Defaults to false
     *
     * @var bool $includeGenericArticleFacets
     */
    private $includeGenericArticleFacets = null;

    /**
     * Options for returning assembly group facets. Defaults to false.
     *
     * @var \Myrzan\TecDocClient\Generated\AssemblyGroupFacetOptionsType $assemblyGroupFacetOptions
     */
    private $assemblyGroupFacetOptions = null;

    /**
     * Include the facet counts for article and linkage (only included if filtering by linkage id) criteria. Defaults to false
     *
     * @var bool $includeCriteriaFacets
     */
    private $includeCriteriaFacets = null;

    /**
     * Include Comparable Numbers in the response (Note: Right now only comparable numbers that match the search query are included). Defaults to false.
     *
     * @var bool $includeComparableNumbers
     */
    private $includeComparableNumbers = null;

    /**
     * Include the Links in the response. Defaults to false.
     *
     * @var bool $includeLinks
     */
    private $includeLinks = null;

    /**
     * Include the Prices in the response. Defaults to false.
     *
     * @var bool $includePrices
     */
    private $includePrices = null;

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
     * Gets as searchQuery
     *
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }

    /**
     * Sets a new searchQuery
     *
     * @param string $searchQuery
     * @return self
     */
    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;
        return $this;
    }

    /**
     * Gets as searchType
     *
     * 0: Article Number (DEFAULT), 1: OE Number, 2: Trade Number, 3: Comparable Number, 4: Replacement Number, 5: Replaced Number, 6: EAN Number, 7: Criteria Number, 10: Any Number, 99: Free Text
     *
     * @return int
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * 0: Article Number (DEFAULT), 1: OE Number, 2: Trade Number, 3: Comparable Number, 4: Replacement Number, 5: Replaced Number, 6: EAN Number, 7: Criteria Number, 10: Any Number, 99: Free Text
     *
     * @param int $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Gets as searchMatchType
     *
     * exact: Exact Match (DEFAULT), prefix: Prefix Match, suffix: Suffix Match, prefix_or_suffix: Prefix or Suffix Matching
     *
     * @return string
     */
    public function getSearchMatchType()
    {
        return $this->searchMatchType;
    }

    /**
     * Sets a new searchMatchType
     *
     * exact: Exact Match (DEFAULT), prefix: Prefix Match, suffix: Suffix Match, prefix_or_suffix: Prefix or Suffix Matching
     *
     * @param string $searchMatchType
     * @return self
     */
    public function setSearchMatchType($searchMatchType)
    {
        $this->searchMatchType = $searchMatchType;
        return $this;
    }

    /**
     * Adds as legacyArticleIds
     *
     * Only return parts matching these legacy article ids
     *
     * @return self
     * @param int $legacyArticleIds
     */
    public function addToLegacyArticleIds($legacyArticleIds)
    {
        $this->legacyArticleIds[] = $legacyArticleIds;
        return $this;
    }

    /**
     * isset legacyArticleIds
     *
     * Only return parts matching these legacy article ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegacyArticleIds($index)
    {
        return isset($this->legacyArticleIds[$index]);
    }

    /**
     * unset legacyArticleIds
     *
     * Only return parts matching these legacy article ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegacyArticleIds($index)
    {
        unset($this->legacyArticleIds[$index]);
    }

    /**
     * Gets as legacyArticleIds
     *
     * Only return parts matching these legacy article ids
     *
     * @return int[]
     */
    public function getLegacyArticleIds()
    {
        return $this->legacyArticleIds;
    }

    /**
     * Sets a new legacyArticleIds
     *
     * Only return parts matching these legacy article ids
     *
     * @param int[] $legacyArticleIds
     * @return self
     */
    public function setLegacyArticleIds(array $legacyArticleIds)
    {
        $this->legacyArticleIds = $legacyArticleIds;
        return $this;
    }

    /**
     * Adds as dataSupplierIds
     *
     * Only return parts that belong to these data supplier ids
     *
     * @return self
     * @param int $dataSupplierIds
     */
    public function addToDataSupplierIds($dataSupplierIds)
    {
        $this->dataSupplierIds[] = $dataSupplierIds;
        return $this;
    }

    /**
     * isset dataSupplierIds
     *
     * Only return parts that belong to these data supplier ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataSupplierIds($index)
    {
        return isset($this->dataSupplierIds[$index]);
    }

    /**
     * unset dataSupplierIds
     *
     * Only return parts that belong to these data supplier ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataSupplierIds($index)
    {
        unset($this->dataSupplierIds[$index]);
    }

    /**
     * Gets as dataSupplierIds
     *
     * Only return parts that belong to these data supplier ids
     *
     * @return int[]
     */
    public function getDataSupplierIds()
    {
        return $this->dataSupplierIds;
    }

    /**
     * Sets a new dataSupplierIds
     *
     * Only return parts that belong to these data supplier ids
     *
     * @param int[] $dataSupplierIds
     * @return self
     */
    public function setDataSupplierIds(array $dataSupplierIds)
    {
        $this->dataSupplierIds = $dataSupplierIds;
        return $this;
    }

    /**
     * Adds as genericArticleIds
     *
     * Only return parts that belong to these generic article
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
     * Only return parts that belong to these generic article
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
     * Only return parts that belong to these generic article
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
     * Only return parts that belong to these generic article
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
     * Only return parts that belong to these generic article
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
     * Only return parts that belong to these assembly group nodes
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
     * Only return parts that belong to these assembly group nodes
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
     * Only return parts that belong to these assembly group nodes
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
     * Only return parts that belong to these assembly group nodes
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
     * Only return parts that belong to these assembly group nodes
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
     * Adds as criteriaFilters
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CriteriaFilterType $criteriaFilters
     */
    public function addToCriteriaFilters(\Myrzan\TecDocClient\Generated\CriteriaFilterType $criteriaFilters)
    {
        $this->criteriaFilters[] = $criteriaFilters;
        return $this;
    }

    /**
     * isset criteriaFilters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriteriaFilters($index)
    {
        return isset($this->criteriaFilters[$index]);
    }

    /**
     * unset criteriaFilters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriteriaFilters($index)
    {
        unset($this->criteriaFilters[$index]);
    }

    /**
     * Gets as criteriaFilters
     *
     * @return \Myrzan\TecDocClient\Generated\CriteriaFilterType[]
     */
    public function getCriteriaFilters()
    {
        return $this->criteriaFilters;
    }

    /**
     * Sets a new criteriaFilters
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaFilterType[] $criteriaFilters
     * @return self
     */
    public function setCriteriaFilters(array $criteriaFilters)
    {
        $this->criteriaFilters = $criteriaFilters;
        return $this;
    }

    /**
     * Gets as linkageTargetId
     *
     * Filter to parts that are linked to this target id (also requires the linkingTargetType)
     *
     * @return int
     */
    public function getLinkageTargetId()
    {
        return $this->linkageTargetId;
    }

    /**
     * Sets a new linkageTargetId
     *
     * Filter to parts that are linked to this target id (also requires the linkingTargetType)
     *
     * @param int $linkageTargetId
     * @return self
     */
    public function setLinkageTargetId($linkageTargetId)
    {
        $this->linkageTargetId = $linkageTargetId;
        return $this;
    }

    /**
     * Gets as linkageTargetType
     *
     * 'P': Vehicle Type (Passenger + Motorcycle + LCV), 'V': Passenger Car, 'L': LCV, 'B': Motorcycle, 'O': CV Type (Commercial Vehicle + Tractor), 'C': Commercial Vehicle, 'T': Tractor, 'M': Engine, 'A': Axle, 'K': CV Body Type
     *
     * @return string
     */
    public function getLinkageTargetType()
    {
        return $this->linkageTargetType;
    }

    /**
     * Sets a new linkageTargetType
     *
     * 'P': Vehicle Type (Passenger + Motorcycle + LCV), 'V': Passenger Car, 'L': LCV, 'B': Motorcycle, 'O': CV Type (Commercial Vehicle + Tractor), 'C': Commercial Vehicle, 'T': Tractor, 'M': Engine, 'A': Axle, 'K': CV Body Type
     *
     * @param string $linkageTargetType
     * @return self
     */
    public function setLinkageTargetType($linkageTargetType)
    {
        $this->linkageTargetType = $linkageTargetType;
        return $this;
    }

    /**
     * Gets as linkageTargetCountry
     *
     * Specify a linkage-specific country to filter article linkages and criteria on. Defaults to 'articleCountry' value.
     *
     * @return string
     */
    public function getLinkageTargetCountry()
    {
        return $this->linkageTargetCountry;
    }

    /**
     * Sets a new linkageTargetCountry
     *
     * Specify a linkage-specific country to filter article linkages and criteria on. Defaults to 'articleCountry' value.
     *
     * @param string $linkageTargetCountry
     * @return self
     */
    public function setLinkageTargetCountry($linkageTargetCountry)
    {
        $this->linkageTargetCountry = $linkageTargetCountry;
        return $this;
    }

    /**
     * Gets as newArticlesDateFrom
     *
     * Only include articles added since this date (YYYY-MM-DD).
     *
     * @return string
     */
    public function getNewArticlesDateFrom()
    {
        return $this->newArticlesDateFrom;
    }

    /**
     * Sets a new newArticlesDateFrom
     *
     * Only include articles added since this date (YYYY-MM-DD).
     *
     * @param string $newArticlesDateFrom
     * @return self
     */
    public function setNewArticlesDateFrom($newArticlesDateFrom)
    {
        $this->newArticlesDateFrom = $newArticlesDateFrom;
        return $this;
    }

    /**
     * Gets as newArticlesDateTo
     *
     * Only include articles added up until this date (YYYY-MM-DD).
     *
     * @return string
     */
    public function getNewArticlesDateTo()
    {
        return $this->newArticlesDateTo;
    }

    /**
     * Sets a new newArticlesDateTo
     *
     * Only include articles added up until this date (YYYY-MM-DD).
     *
     * @param string $newArticlesDateTo
     * @return self
     */
    public function setNewArticlesDateTo($newArticlesDateTo)
    {
        $this->newArticlesDateTo = $newArticlesDateTo;
        return $this;
    }

    /**
     * Gets as newLinkagesDateFrom
     *
     * Only include articles with linkages added since this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @return string
     */
    public function getNewLinkagesDateFrom()
    {
        return $this->newLinkagesDateFrom;
    }

    /**
     * Sets a new newLinkagesDateFrom
     *
     * Only include articles with linkages added since this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @param string $newLinkagesDateFrom
     * @return self
     */
    public function setNewLinkagesDateFrom($newLinkagesDateFrom)
    {
        $this->newLinkagesDateFrom = $newLinkagesDateFrom;
        return $this;
    }

    /**
     * Gets as newLinkagesDateTo
     *
     * Only include articles with linkages added up until this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @return string
     */
    public function getNewLinkagesDateTo()
    {
        return $this->newLinkagesDateTo;
    }

    /**
     * Sets a new newLinkagesDateTo
     *
     * Only include articles with linkages added up until this date (YYYY-MM-DD). Note: This is only accurate with a limited number of other filters.
     *
     * @param string $newLinkagesDateTo
     * @return self
     */
    public function setNewLinkagesDateTo($newLinkagesDateTo)
    {
        $this->newLinkagesDateTo = $newLinkagesDateTo;
        return $this;
    }

    /**
     * Gets as newLinkagesMfrId
     *
     * Only include new linkages with this mfr id. Only valid if using the newLinkagesDateFrom or newLinkagesDateTo field.
     *
     * @return int
     */
    public function getNewLinkagesMfrId()
    {
        return $this->newLinkagesMfrId;
    }

    /**
     * Sets a new newLinkagesMfrId
     *
     * Only include new linkages with this mfr id. Only valid if using the newLinkagesDateFrom or newLinkagesDateTo field.
     *
     * @param int $newLinkagesMfrId
     * @return self
     */
    public function setNewLinkagesMfrId($newLinkagesMfrId)
    {
        $this->newLinkagesMfrId = $newLinkagesMfrId;
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
     * How many article results per page you want. Defaults to 10. Note: Increasing this value will decrease the 'maxAllowedPage' in the response.
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
     * How many article results per page you want. Defaults to 10. Note: Increasing this value will decrease the 'maxAllowedPage' in the response.
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
     * Which page of article results to show. Defaults to 1. You can only page through the first ~10,000 (exact limit subject to change) results using this method. The 'maxAllowedPage' in the response will tell you what the current limit is.
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
     * Which page of article results to show. Defaults to 1. You can only page through the first ~10,000 (exact limit subject to change) results using this method. The 'maxAllowedPage' in the response will tell you what the current limit is.
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
     * Gets as linkagesPerPage
     *
     * How many linkage results per page you want. Defaults to 10 (subject to change). Only applicable if includeLinkages is true.
     *
     * @return int
     */
    public function getLinkagesPerPage()
    {
        return $this->linkagesPerPage;
    }

    /**
     * Sets a new linkagesPerPage
     *
     * How many linkage results per page you want. Defaults to 10 (subject to change). Only applicable if includeLinkages is true.
     *
     * @param int $linkagesPerPage
     * @return self
     */
    public function setLinkagesPerPage($linkagesPerPage)
    {
        $this->linkagesPerPage = $linkagesPerPage;
        return $this;
    }

    /**
     * Gets as linkagesPage
     *
     * Which page of linkage results to show. Only applicable if includeLinkages is true.
     *
     * @return int
     */
    public function getLinkagesPage()
    {
        return $this->linkagesPage;
    }

    /**
     * Sets a new linkagesPage
     *
     * Which page of linkage results to show. Only applicable if includeLinkages is true.
     *
     * @param int $linkagesPage
     * @return self
     */
    public function setLinkagesPage($linkagesPage)
    {
        $this->linkagesPage = $linkagesPage;
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
     * Gets as includeAll
     *
     * Include ALL Data in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeAll()
    {
        return $this->includeAll;
    }

    /**
     * Sets a new includeAll
     *
     * Include ALL Data in the response. Defaults to false.
     *
     * @param bool $includeAll
     * @return self
     */
    public function setIncludeAll($includeAll)
    {
        $this->includeAll = $includeAll;
        return $this;
    }

    /**
     * Gets as includeMisc
     *
     * Include Misc Article Data. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeMisc()
    {
        return $this->includeMisc;
    }

    /**
     * Sets a new includeMisc
     *
     * Include Misc Article Data. Defaults to false.
     *
     * @param bool $includeMisc
     * @return self
     */
    public function setIncludeMisc($includeMisc)
    {
        $this->includeMisc = $includeMisc;
        return $this;
    }

    /**
     * Gets as includeGenericArticles
     *
     * Include Generic Article Information in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeGenericArticles()
    {
        return $this->includeGenericArticles;
    }

    /**
     * Sets a new includeGenericArticles
     *
     * Include Generic Article Information in the response. Defaults to false.
     *
     * @param bool $includeGenericArticles
     * @return self
     */
    public function setIncludeGenericArticles($includeGenericArticles)
    {
        $this->includeGenericArticles = $includeGenericArticles;
        return $this;
    }

    /**
     * Gets as includeArticleText
     *
     * Include the Article Text in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeArticleText()
    {
        return $this->includeArticleText;
    }

    /**
     * Sets a new includeArticleText
     *
     * Include the Article Text in the response. Defaults to false.
     *
     * @param bool $includeArticleText
     * @return self
     */
    public function setIncludeArticleText($includeArticleText)
    {
        $this->includeArticleText = $includeArticleText;
        return $this;
    }

    /**
     * Gets as includeGTINs
     *
     * Include Global Trade Identification Numbers (GTINs) associated with the part in the response. Note: This includes EANs. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeGTINs()
    {
        return $this->includeGTINs;
    }

    /**
     * Sets a new includeGTINs
     *
     * Include Global Trade Identification Numbers (GTINs) associated with the part in the response. Note: This includes EANs. Defaults to false.
     *
     * @param bool $includeGTINs
     * @return self
     */
    public function setIncludeGTINs($includeGTINs)
    {
        $this->includeGTINs = $includeGTINs;
        return $this;
    }

    /**
     * Gets as includeTradeNumbers
     *
     * Include Trade Numbers in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeTradeNumbers()
    {
        return $this->includeTradeNumbers;
    }

    /**
     * Sets a new includeTradeNumbers
     *
     * Include Trade Numbers in the response. Defaults to false.
     *
     * @param bool $includeTradeNumbers
     * @return self
     */
    public function setIncludeTradeNumbers($includeTradeNumbers)
    {
        $this->includeTradeNumbers = $includeTradeNumbers;
        return $this;
    }

    /**
     * Gets as includeOEMNumbers
     *
     * Include OEM Numbers in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeOEMNumbers()
    {
        return $this->includeOEMNumbers;
    }

    /**
     * Sets a new includeOEMNumbers
     *
     * Include OEM Numbers in the response. Defaults to false.
     *
     * @param bool $includeOEMNumbers
     * @return self
     */
    public function setIncludeOEMNumbers($includeOEMNumbers)
    {
        $this->includeOEMNumbers = $includeOEMNumbers;
        return $this;
    }

    /**
     * Gets as includeReplacesArticles
     *
     * Include information about articles replaced by this part in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeReplacesArticles()
    {
        return $this->includeReplacesArticles;
    }

    /**
     * Sets a new includeReplacesArticles
     *
     * Include information about articles replaced by this part in the response. Defaults to false.
     *
     * @param bool $includeReplacesArticles
     * @return self
     */
    public function setIncludeReplacesArticles($includeReplacesArticles)
    {
        $this->includeReplacesArticles = $includeReplacesArticles;
        return $this;
    }

    /**
     * Gets as includeReplacedByArticles
     *
     * Include information about articles that replace this part in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeReplacedByArticles()
    {
        return $this->includeReplacedByArticles;
    }

    /**
     * Sets a new includeReplacedByArticles
     *
     * Include information about articles that replace this part in the response. Defaults to false.
     *
     * @param bool $includeReplacedByArticles
     * @return self
     */
    public function setIncludeReplacedByArticles($includeReplacedByArticles)
    {
        $this->includeReplacedByArticles = $includeReplacedByArticles;
        return $this;
    }

    /**
     * Gets as includeArticleCriteria
     *
     * Include Article Criteria in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeArticleCriteria()
    {
        return $this->includeArticleCriteria;
    }

    /**
     * Sets a new includeArticleCriteria
     *
     * Include Article Criteria in the response. Defaults to false.
     *
     * @param bool $includeArticleCriteria
     * @return self
     */
    public function setIncludeArticleCriteria($includeArticleCriteria)
    {
        $this->includeArticleCriteria = $includeArticleCriteria;
        return $this;
    }

    /**
     * Gets as includeLinkages
     *
     * Include Linkage and Linkage Criteria information in the response (only valid if filtering by linkage id). Defaults to false.
     *
     * @return bool
     */
    public function getIncludeLinkages()
    {
        return $this->includeLinkages;
    }

    /**
     * Sets a new includeLinkages
     *
     * Include Linkage and Linkage Criteria information in the response (only valid if filtering by linkage id). Defaults to false.
     *
     * @param bool $includeLinkages
     * @return self
     */
    public function setIncludeLinkages($includeLinkages)
    {
        $this->includeLinkages = $includeLinkages;
        return $this;
    }

    /**
     * Gets as includePDFs
     *
     * Include PDFs in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludePDFs()
    {
        return $this->includePDFs;
    }

    /**
     * Sets a new includePDFs
     *
     * Include PDFs in the response. Defaults to false.
     *
     * @param bool $includePDFs
     * @return self
     */
    public function setIncludePDFs($includePDFs)
    {
        $this->includePDFs = $includePDFs;
        return $this;
    }

    /**
     * Gets as includeImages
     *
     * Include Images in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeImages()
    {
        return $this->includeImages;
    }

    /**
     * Sets a new includeImages
     *
     * Include Images in the response. Defaults to false.
     *
     * @param bool $includeImages
     * @return self
     */
    public function setIncludeImages($includeImages)
    {
        $this->includeImages = $includeImages;
        return $this;
    }

    /**
     * Gets as includeDataSupplierFacets
     *
     * Defaults to false
     *
     * @return bool
     */
    public function getIncludeDataSupplierFacets()
    {
        return $this->includeDataSupplierFacets;
    }

    /**
     * Sets a new includeDataSupplierFacets
     *
     * Defaults to false
     *
     * @param bool $includeDataSupplierFacets
     * @return self
     */
    public function setIncludeDataSupplierFacets($includeDataSupplierFacets)
    {
        $this->includeDataSupplierFacets = $includeDataSupplierFacets;
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

    /**
     * Gets as includeCriteriaFacets
     *
     * Include the facet counts for article and linkage (only included if filtering by linkage id) criteria. Defaults to false
     *
     * @return bool
     */
    public function getIncludeCriteriaFacets()
    {
        return $this->includeCriteriaFacets;
    }

    /**
     * Sets a new includeCriteriaFacets
     *
     * Include the facet counts for article and linkage (only included if filtering by linkage id) criteria. Defaults to false
     *
     * @param bool $includeCriteriaFacets
     * @return self
     */
    public function setIncludeCriteriaFacets($includeCriteriaFacets)
    {
        $this->includeCriteriaFacets = $includeCriteriaFacets;
        return $this;
    }

    /**
     * Gets as includeComparableNumbers
     *
     * Include Comparable Numbers in the response (Note: Right now only comparable numbers that match the search query are included). Defaults to false.
     *
     * @return bool
     */
    public function getIncludeComparableNumbers()
    {
        return $this->includeComparableNumbers;
    }

    /**
     * Sets a new includeComparableNumbers
     *
     * Include Comparable Numbers in the response (Note: Right now only comparable numbers that match the search query are included). Defaults to false.
     *
     * @param bool $includeComparableNumbers
     * @return self
     */
    public function setIncludeComparableNumbers($includeComparableNumbers)
    {
        $this->includeComparableNumbers = $includeComparableNumbers;
        return $this;
    }

    /**
     * Gets as includeLinks
     *
     * Include the Links in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->includeLinks;
    }

    /**
     * Sets a new includeLinks
     *
     * Include the Links in the response. Defaults to false.
     *
     * @param bool $includeLinks
     * @return self
     */
    public function setIncludeLinks($includeLinks)
    {
        $this->includeLinks = $includeLinks;
        return $this;
    }

    /**
     * Gets as includePrices
     *
     * Include the Prices in the response. Defaults to false.
     *
     * @return bool
     */
    public function getIncludePrices()
    {
        return $this->includePrices;
    }

    /**
     * Sets a new includePrices
     *
     * Include the Prices in the response. Defaults to false.
     *
     * @param bool $includePrices
     * @return self
     */
    public function setIncludePrices($includePrices)
    {
        $this->includePrices = $includePrices;
        return $this;
    }


}

