<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ChildNodesPattern2RecordType
 *
 * 
 * XSD Type: childNodesPattern2Record
 */
class ChildNodesPattern2RecordType extends ChildNodesPattern2RecordSrcType
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
     * @var int $parentNodeId
     */
    private $parentNodeId = null;

    /**
     * @var int $sortNo
     */
    private $sortNo = null;

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
     * Gets as sortNo
     *
     * @return int
     */
    public function getSortNo()
    {
        return $this->sortNo;
    }

    /**
     * Sets a new sortNo
     *
     * @param int $sortNo
     * @return self
     */
    public function setSortNo($sortNo)
    {
        $this->sortNo = $sortNo;
        return $this;
    }


}

