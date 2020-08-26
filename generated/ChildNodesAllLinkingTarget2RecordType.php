<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ChildNodesAllLinkingTarget2RecordType
 *
 * 
 * XSD Type: childNodesAllLinkingTarget2Record
 */
class ChildNodesAllLinkingTarget2RecordType extends ChildNodesAllLinkingTarget2RecordSrcType
{

    /**
     * @var string $assemblyGroupName
     */
    private $assemblyGroupName = null;

    /**
     * @var int $assemblyGroupNodeId
     */
    private $assemblyGroupNodeId = null;

    /**
     * @var bool $hasChilds
     */
    private $hasChilds = null;

    /**
     * @var int $parentNodeId
     */
    private $parentNodeId = null;

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
     * Gets as hasChilds
     *
     * @return bool
     */
    public function getHasChilds()
    {
        return $this->hasChilds;
    }

    /**
     * Sets a new hasChilds
     *
     * @param bool $hasChilds
     * @return self
     */
    public function setHasChilds($hasChilds)
    {
        $this->hasChilds = $hasChilds;
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


}

