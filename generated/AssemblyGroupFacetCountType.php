<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AssemblyGroupFacetCountType
 *
 * 
 * XSD Type: AssemblyGroupFacetCount
 */
class AssemblyGroupFacetCountType
{

    /**
     * @var int $assemblyGroupNodeId
     */
    private $assemblyGroupNodeId = null;

    /**
     * @var string $assemblyGroupName
     */
    private $assemblyGroupName = null;

    /**
     * 'P': Passenger Car/LCV, 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle, 'U': Universal.
     *
     * @var string $assemblyGroupType
     */
    private $assemblyGroupType = null;

    /**
     * @var int $parentNodeId
     */
    private $parentNodeId = null;

    /**
     * The number of available child assemblyGroupNodes for this node.
     *
     * @var int $children
     */
    private $children = null;

    /**
     * The count of articles that are in this assembly group. Note: counts are only populated for a linkage filter's assembly group type.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as assemblyGroupNodeId
     *
     * @return int
     */
    public function getAssemblyGroupNodeId()
    {
        return $this->assemblyGroupNodeId;
    }

    /**
     * Sets a new assemblyGroupNodeId
     *
     * @param int $assemblyGroupNodeId
     * @return self
     */
    public function setAssemblyGroupNodeId($assemblyGroupNodeId)
    {
        $this->assemblyGroupNodeId = $assemblyGroupNodeId;
        return $this;
    }

    /**
     * Gets as assemblyGroupName
     *
     * @return string
     */
    public function getAssemblyGroupName()
    {
        return $this->assemblyGroupName;
    }

    /**
     * Sets a new assemblyGroupName
     *
     * @param string $assemblyGroupName
     * @return self
     */
    public function setAssemblyGroupName($assemblyGroupName)
    {
        $this->assemblyGroupName = $assemblyGroupName;
        return $this;
    }

    /**
     * Gets as assemblyGroupType
     *
     * 'P': Passenger Car/LCV, 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle, 'U': Universal.
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
     * 'P': Passenger Car/LCV, 'B': Motorcycle, 'O': Commercial Vehicle, 'M': Engine, 'A': Axle, 'U': Universal.
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
     * Gets as parentNodeId
     *
     * @return int
     */
    public function getParentNodeId()
    {
        return $this->parentNodeId;
    }

    /**
     * Sets a new parentNodeId
     *
     * @param int $parentNodeId
     * @return self
     */
    public function setParentNodeId($parentNodeId)
    {
        $this->parentNodeId = $parentNodeId;
        return $this;
    }

    /**
     * Gets as children
     *
     * The number of available child assemblyGroupNodes for this node.
     *
     * @return int
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * The number of available child assemblyGroupNodes for this node.
     *
     * @param int $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as count
     *
     * The count of articles that are in this assembly group. Note: counts are only populated for a linkage filter's assembly group type.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The count of articles that are in this assembly group. Note: counts are only populated for a linkage filter's assembly group type.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

