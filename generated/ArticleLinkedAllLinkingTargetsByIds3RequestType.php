<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleLinkedAllLinkingTargetsByIds3RequestType
 *
 * 
 * XSD Type: articleLinkedAllLinkingTargetsByIds3Request
 */
class ArticleLinkedAllLinkingTargetsByIds3RequestType extends ArticleLinkedAllLinkingTargetsByIds3RequestSrcType
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
     * @var bool $immediateAttributs
     */
    private $immediateAttributs = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\LinkedArticlePairType[] $linkedArticlePairs
     */
    private $linkedArticlePairs = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var int $numberplateType
     */
    private $numberplateType = null;

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
     * Gets as immediateAttributs
     *
     * @return bool
     */
    public function getImmediateAttributs()
    {
        return $this->immediateAttributs;
    }

    /**
     * Sets a new immediateAttributs
     *
     * @param bool $immediateAttributs
     * @return self
     */
    public function setImmediateAttributs($immediateAttributs)
    {
        $this->immediateAttributs = $immediateAttributs;
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
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\LinkedArticlePairType $array
     */
    public function addToLinkedArticlePairs(\Baumeister\TecDocClient\Generated\LinkedArticlePairType $array)
    {
        $this->linkedArticlePairs[] = $array;
        return $this;
    }

    /**
     * isset linkedArticlePairs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedArticlePairs($index)
    {
        return isset($this->linkedArticlePairs[$index]);
    }

    /**
     * unset linkedArticlePairs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedArticlePairs($index)
    {
        unset($this->linkedArticlePairs[$index]);
    }

    /**
     * Gets as linkedArticlePairs
     *
     * @return \Baumeister\TecDocClient\Generated\LinkedArticlePairType[]
     */
    public function getLinkedArticlePairs()
    {
        return $this->linkedArticlePairs;
    }

    /**
     * Sets a new linkedArticlePairs
     *
     * @param \Baumeister\TecDocClient\Generated\LinkedArticlePairType[] $linkedArticlePairs
     * @return self
     */
    public function setLinkedArticlePairs(array $linkedArticlePairs)
    {
        $this->linkedArticlePairs = $linkedArticlePairs;
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
     * Gets as numberplateType
     *
     * @return int
     */
    public function getNumberplateType()
    {
        return $this->numberplateType;
    }

    /**
     * Sets a new numberplateType
     *
     * @param int $numberplateType
     * @return self
     */
    public function setNumberplateType($numberplateType)
    {
        $this->numberplateType = $numberplateType;
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

