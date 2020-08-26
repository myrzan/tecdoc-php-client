<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing GenericArticlesRecordType
 *
 * 
 * XSD Type: genericArticlesRecord
 */
class GenericArticlesRecordType extends GenericArticlesRecordSrcType
{

    /**
     * @var string $assemblyGroup
     */
    private $assemblyGroup = null;

    /**
     * @var string $designation
     */
    private $designation = null;

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $masterDesignation
     */
    private $masterDesignation = null;

    /**
     * @var int $searchTreeNodeId
     */
    private $searchTreeNodeId = null;

    /**
     * @var string $usageDesignation
     */
    private $usageDesignation = null;

    /**
     * Gets as assemblyGroup
     *
     * @return string
     */
    public function getAssemblyGroup()
    {
        return $this->assemblyGroup;
    }

    /**
     * Sets a new assemblyGroup
     *
     * @param string $assemblyGroup
     * @return self
     */
    public function setAssemblyGroup($assemblyGroup)
    {
        $this->assemblyGroup = $assemblyGroup;
        return $this;
    }

    /**
     * Gets as designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * @param string $designation
     * @return self
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Gets as genericArticleId
     *
     * @return int
     */
    public function getGenericArticleId()
    {
        return $this->genericArticleId;
    }

    /**
     * Sets a new genericArticleId
     *
     * @param int $genericArticleId
     * @return self
     */
    public function setGenericArticleId($genericArticleId)
    {
        $this->genericArticleId = $genericArticleId;
        return $this;
    }

    /**
     * Gets as masterDesignation
     *
     * @return string
     */
    public function getMasterDesignation()
    {
        return $this->masterDesignation;
    }

    /**
     * Sets a new masterDesignation
     *
     * @param string $masterDesignation
     * @return self
     */
    public function setMasterDesignation($masterDesignation)
    {
        $this->masterDesignation = $masterDesignation;
        return $this;
    }

    /**
     * Gets as searchTreeNodeId
     *
     * @return int
     */
    public function getSearchTreeNodeId()
    {
        return $this->searchTreeNodeId;
    }

    /**
     * Sets a new searchTreeNodeId
     *
     * @param int $searchTreeNodeId
     * @return self
     */
    public function setSearchTreeNodeId($searchTreeNodeId)
    {
        $this->searchTreeNodeId = $searchTreeNodeId;
        return $this;
    }

    /**
     * Gets as usageDesignation
     *
     * @return string
     */
    public function getUsageDesignation()
    {
        return $this->usageDesignation;
    }

    /**
     * Sets a new usageDesignation
     *
     * @param string $usageDesignation
     * @return self
     */
    public function setUsageDesignation($usageDesignation)
    {
        $this->usageDesignation = $usageDesignation;
        return $this;
    }


}

