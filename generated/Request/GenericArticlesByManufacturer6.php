<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing GenericArticlesByManufacturer6
 *
 * 
 * XSD Type: genericArticlesByManufacturer6Request
 */
class GenericArticlesByManufacturer6 
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var int $assemblyGroupNodeId
     */
    private $assemblyGroupNodeId = null;

    /**
     * @var int[] $brandNo
     */
    private $brandNo = null;

    /**
     * @var int[] $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var int $resultMode
     */
    private $resultMode = null;

    /**
     * @var int $sortMode
     */
    private $sortMode = null;

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
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToBrandNo($array)
    {
        $this->brandNo[] = $array;
        return $this;
    }

    /**
     * isset brandNo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrandNo($index)
    {
        return isset($this->brandNo[$index]);
    }

    /**
     * unset brandNo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrandNo($index)
    {
        unset($this->brandNo[$index]);
    }

    /**
     * Gets as brandNo
     *
     * @return int[]
     */
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Sets a new brandNo
     *
     * @param int[] $brandNo
     * @return self
     */
    public function setBrandNo(array $brandNo)
    {
        $this->brandNo = $brandNo;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToGenericArticleId($array)
    {
        $this->genericArticleId[] = $array;
        return $this;
    }

    /**
     * isset genericArticleId
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenericArticleId($index)
    {
        return isset($this->genericArticleId[$index]);
    }

    /**
     * unset genericArticleId
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenericArticleId($index)
    {
        unset($this->genericArticleId[$index]);
    }

    /**
     * Gets as genericArticleId
     *
     * @return int[]
     */
    public function getGenericArticleId()
    {
        return $this->genericArticleId;
    }

    /**
     * Sets a new genericArticleId
     *
     * @param int[] $genericArticleId
     * @return self
     */
    public function setGenericArticleId(array $genericArticleId)
    {
        $this->genericArticleId = $genericArticleId;
        return $this;
    }

    /**
     * Gets as lang
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
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as linkingTargetId
     *
     * @return int
     */
    public function getLinkingTargetId()
    {
        return $this->linkingTargetId;
    }

    /**
     * Sets a new linkingTargetId
     *
     * @param int $linkingTargetId
     * @return self
     */
    public function setLinkingTargetId($linkingTargetId)
    {
        $this->linkingTargetId = $linkingTargetId;
        return $this;
    }

    /**
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
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
     * Gets as resultMode
     *
     * @return int
     */
    public function getResultMode()
    {
        return $this->resultMode;
    }

    /**
     * Sets a new resultMode
     *
     * @param int $resultMode
     * @return self
     */
    public function setResultMode($resultMode)
    {
        $this->resultMode = $resultMode;
        return $this;
    }

    /**
     * Gets as sortMode
     *
     * @return int
     */
    public function getSortMode()
    {
        return $this->sortMode;
    }

    /**
     * Sets a new sortMode
     *
     * @param int $sortMode
     * @return self
     */
    public function setSortMode($sortMode)
    {
        $this->sortMode = $sortMode;
        return $this;
    }


}

