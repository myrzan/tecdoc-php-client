<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AssemblyGroupFacetOptionsType
 *
 * 
 * XSD Type: AssemblyGroupFacetOptions
 */
class AssemblyGroupFacetOptionsType
{

    /**
     * Include Assembly Group Facets in response. Defaults to false.
     *
     * @var bool $enabled
     */
    private $enabled = null;

    /**
     * 'U': Universal, 'P': Passenger Car/LCV (w/o Motorcycle), 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle. If linkageTargetType is specified, it will automatically default to the matching assemblyGroupType, otherwise default is 'U'. Multiple tree types can be combined (e.g. 'PU' will return back both Passenger Car and Universal Assembly Group Types).
     *
     * @var string $assemblyGroupType
     */
    private $assemblyGroupType = null;

    /**
     * Always return the complete tree back, even if other assemblyGroupsIds are being filtered. Default false.
     *
     * @var bool $includeCompleteTree
     */
    private $includeCompleteTree = null;

    /**
     * Specify a limit to the number of edges from either a filtered 'assemblyGroupNodeIds' or assembly group root node in the facet response. Defaults to 1 (no limit, full tree).
     *
     * @var int $maxDepth
     */
    private $maxDepth = null;

    /**
     * Gets as enabled
     *
     * Include Assembly Group Facets in response. Defaults to false.
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Sets a new enabled
     *
     * Include Assembly Group Facets in response. Defaults to false.
     *
     * @param bool $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Gets as assemblyGroupType
     *
     * 'U': Universal, 'P': Passenger Car/LCV (w/o Motorcycle), 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle. If linkageTargetType is specified, it will automatically default to the matching assemblyGroupType, otherwise default is 'U'. Multiple tree types can be combined (e.g. 'PU' will return back both Passenger Car and Universal Assembly Group Types).
     *
     * @return string
     */
    public function getAssemblyGroupType()
    {
        return $this->assemblyGroupType;
    }

    /**
     * Sets a new assemblyGroupType
     *
     * 'U': Universal, 'P': Passenger Car/LCV (w/o Motorcycle), 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle. If linkageTargetType is specified, it will automatically default to the matching assemblyGroupType, otherwise default is 'U'. Multiple tree types can be combined (e.g. 'PU' will return back both Passenger Car and Universal Assembly Group Types).
     *
     * @param string $assemblyGroupType
     * @return self
     */
    public function setAssemblyGroupType($assemblyGroupType)
    {
        $this->assemblyGroupType = $assemblyGroupType;
        return $this;
    }

    /**
     * Gets as includeCompleteTree
     *
     * Always return the complete tree back, even if other assemblyGroupsIds are being filtered. Default false.
     *
     * @return bool
     */
    public function getIncludeCompleteTree()
    {
        return $this->includeCompleteTree;
    }

    /**
     * Sets a new includeCompleteTree
     *
     * Always return the complete tree back, even if other assemblyGroupsIds are being filtered. Default false.
     *
     * @param bool $includeCompleteTree
     * @return self
     */
    public function setIncludeCompleteTree($includeCompleteTree)
    {
        $this->includeCompleteTree = $includeCompleteTree;
        return $this;
    }

    /**
     * Gets as maxDepth
     *
     * Specify a limit to the number of edges from either a filtered 'assemblyGroupNodeIds' or assembly group root node in the facet response. Defaults to 1 (no limit, full tree).
     *
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Sets a new maxDepth
     *
     * Specify a limit to the number of edges from either a filtered 'assemblyGroupNodeIds' or assembly group root node in the facet response. Defaults to 1 (no limit, full tree).
     *
     * @param int $maxDepth
     * @return self
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }


}

