<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing CriteriaDialogAttributsRequestType
 *
 * 
 * XSD Type: criteriaDialogAttributsRequest
 */
class CriteriaDialogAttributsRequestType extends CriteriaDialogAttributsRequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleIdPairType[] $articleIds
     */
    private $articleIds = null;

    /**
     * @var int[] $attributeIds
     */
    private $attributeIds = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AttributeValueType[] $attributeValues
     */
    private $attributeValues = null;

    /**
     * @var int $brandNo
     */
    private $brandNo = null;

    /**
     * @var int $genericArticleId
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
     * @var string $requestMode
     */
    private $requestMode = null;

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
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleIdPairType $array
     */
    public function addToArticleIds(\Baumeister\TecDocClient\Generated\ArticleIdPairType $array)
    {
        $this->articleIds[] = $array;
        return $this;
    }

    /**
     * isset articleIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleIds($index)
    {
        return isset($this->articleIds[$index]);
    }

    /**
     * unset articleIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleIds($index)
    {
        unset($this->articleIds[$index]);
    }

    /**
     * Gets as articleIds
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleIdPairType[]
     */
    public function getArticleIds()
    {
        return $this->articleIds;
    }

    /**
     * Sets a new articleIds
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleIdPairType[] $articleIds
     * @return self
     */
    public function setArticleIds(array $articleIds)
    {
        $this->articleIds = $articleIds;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToAttributeIds($array)
    {
        $this->attributeIds[] = $array;
        return $this;
    }

    /**
     * isset attributeIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeIds($index)
    {
        return isset($this->attributeIds[$index]);
    }

    /**
     * unset attributeIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeIds($index)
    {
        unset($this->attributeIds[$index]);
    }

    /**
     * Gets as attributeIds
     *
     * @return int[]
     */
    public function getAttributeIds()
    {
        return $this->attributeIds;
    }

    /**
     * Sets a new attributeIds
     *
     * @param int[] $attributeIds
     * @return self
     */
    public function setAttributeIds(array $attributeIds)
    {
        $this->attributeIds = $attributeIds;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AttributeValueType $array
     */
    public function addToAttributeValues(\Baumeister\TecDocClient\Generated\AttributeValueType $array)
    {
        $this->attributeValues[] = $array;
        return $this;
    }

    /**
     * isset attributeValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeValues($index)
    {
        return isset($this->attributeValues[$index]);
    }

    /**
     * unset attributeValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeValues($index)
    {
        unset($this->attributeValues[$index]);
    }

    /**
     * Gets as attributeValues
     *
     * @return \Baumeister\TecDocClient\Generated\AttributeValueType[]
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * Sets a new attributeValues
     *
     * @param \Baumeister\TecDocClient\Generated\AttributeValueType[] $attributeValues
     * @return self
     */
    public function setAttributeValues(array $attributeValues)
    {
        $this->attributeValues = $attributeValues;
        return $this;
    }

    /**
     * Gets as brandNo
     *
     * @return int
     */
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Sets a new brandNo
     *
     * @param int $brandNo
     * @return self
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
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
     * Gets as requestMode
     *
     * @return string
     */
    public function getRequestMode()
    {
        return $this->requestMode;
    }

    /**
     * Sets a new requestMode
     *
     * @param string $requestMode
     * @return self
     */
    public function setRequestMode($requestMode)
    {
        $this->requestMode = $requestMode;
        return $this;
    }


}

