<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing ArticleLinkedAllLinkingTarget3
 *
 * 
 * XSD Type: articleLinkedAllLinkingTarget3Request
 */
class ArticleLinkedAllLinkingTarget3
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var int $articleId
     */
    private $articleId = null;

    /**
     * @var string $lang
     */
    private $lang = null;

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
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $withMainArticles
     */
    private $withMainArticles = null;

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
     * Gets as articleId
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Sets a new articleId
     *
     * @param int $articleId
     * @return self
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
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
     * Gets as withMainArticles
     *
     * @return bool
     */
    public function getWithMainArticles()
    {
        return $this->withMainArticles;
    }

    /**
     * Sets a new withMainArticles
     *
     * @param bool $withMainArticles
     * @return self
     */
    public function setWithMainArticles($withMainArticles)
    {
        $this->withMainArticles = $withMainArticles;
        return $this;
    }


}

