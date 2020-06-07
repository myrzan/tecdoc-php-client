<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleDirectSearchAllNumbersWithStateRequestType
 *
 * 
 * XSD Type: articleDirectSearchAllNumbersWithStateRequest
 */
class ArticleDirectSearchAllNumbersWithStateRequestType extends ArticleDirectSearchAllNumbersWithStateRequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var string $articleNumber
     */
    private $articleNumber = null;

    /**
     * @var int $brandId
     */
    private $brandId = null;

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $numberType
     */
    private $numberType = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $searchExact
     */
    private $searchExact = null;

    /**
     * @var int $sortType
     */
    private $sortType = null;

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
     * Gets as articleNumber
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Sets a new articleNumber
     *
     * @param string $articleNumber
     * @return self
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
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
     * Gets as numberType
     *
     * @return int
     */
    public function getNumberType()
    {
        return $this->numberType;
    }

    /**
     * Sets a new numberType
     *
     * @param int $numberType
     * @return self
     */
    public function setNumberType($numberType)
    {
        $this->numberType = $numberType;
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
     * Gets as searchExact
     *
     * @return bool
     */
    public function getSearchExact()
    {
        return $this->searchExact;
    }

    /**
     * Sets a new searchExact
     *
     * @param bool $searchExact
     * @return self
     */
    public function setSearchExact($searchExact)
    {
        $this->searchExact = $searchExact;
        return $this;
    }

    /**
     * Gets as sortType
     *
     * @return int
     */
    public function getSortType()
    {
        return $this->sortType;
    }

    /**
     * Sets a new sortType
     *
     * @param int $sortType
     * @return self
     */
    public function setSortType($sortType)
    {
        $this->sortType = $sortType;
        return $this;
    }


}

