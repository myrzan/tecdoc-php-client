<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing NewArticleIdsRequestType
 *
 * 
 * XSD Type: newArticleIdsRequest
 */
class NewArticleIdsRequestType extends NewArticleIdsRequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var int $brandId
     */
    private $brandId = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var int $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var int $dateTo
     */
    private $dateTo = null;

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
     * @var int $linkingTargetManuId
     */
    private $linkingTargetManuId = null;

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
     * Gets as brandId
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Sets a new brandId
     *
     * @param int $brandId
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return int
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param int $dateFrom
     * @return self
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return int
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param int $dateTo
     * @return self
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
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
     * Gets as linkingTargetManuId
     *
     * @return int
     */
    public function getLinkingTargetManuId()
    {
        return $this->linkingTargetManuId;
    }

    /**
     * Sets a new linkingTargetManuId
     *
     * @param int $linkingTargetManuId
     * @return self
     */
    public function setLinkingTargetManuId($linkingTargetManuId)
    {
        $this->linkingTargetManuId = $linkingTargetManuId;
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

