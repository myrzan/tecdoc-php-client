<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing LinkedBrands
 *
 * 
 * XSD Type: linkedBrandsRequest
 */
class LinkedBrands
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var int $provider
     */
    private $provider = null;

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
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}

