<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing ChildNodesAllLinkingTarget2
 *
 * 
 * XSD Type: childNodesAllLinkingTarget2Request
 */
class ChildNodesAllLinkingTarget2 
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var bool $childNodes
     */
    private $childNodes = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var bool $linked
     */
    private $linked = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var int $parentNodeId
     */
    private $parentNodeId = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var int $shortCutId
     */
    private $shortCutId = null;

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
     * Gets as childNodes
     *
     * @return bool
     */
    public function getChildNodes()
    {
        return $this->childNodes;
    }

    /**
     * Sets a new childNodes
     *
     * @param bool $childNodes
     * @return self
     */
    public function setChildNodes($childNodes)
    {
        $this->childNodes = $childNodes;
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
     * Gets as linked
     *
     * @return bool
     */
    public function getLinked()
    {
        return $this->linked;
    }

    /**
     * Sets a new linked
     *
     * @param bool $linked
     * @return self
     */
    public function setLinked($linked)
    {
        $this->linked = $linked;
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
     * Gets as shortCutId
     *
     * @return int
     */
    public function getShortCutId()
    {
        return $this->shortCutId;
    }

    /**
     * Sets a new shortCutId
     *
     * @param int $shortCutId
     * @return self
     */
    public function setShortCutId($shortCutId)
    {
        $this->shortCutId = $shortCutId;
        return $this;
    }


}

