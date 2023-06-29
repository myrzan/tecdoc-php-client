<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\ArticleLink;

/**
 * Class representing CriteriaDialogAttributs
 *
 * 
 * XSD Type: criteriaDialogAttributsRecord
 */
class CriteriaDialogAttributs
{

    /**
     * @var ArticleLink[] $articleLinkIds
     */
    private $articleLinkIds = null;

    /**
     * @var AttributeValue[] $attributeValues
     */
    private $attributeValues = null;

    /**
     * @var Attribute[] $attributes
     */
    private $attributes = null;

    /**
     * Adds as array
     *
     * @param ArticleLink $array
     * @return self
     */
    public function addToArticleLinkIds(ArticleLink $array)
    {
        $this->articleLinkIds[] = $array;
        return $this;
    }

    /**
     * isset articleLinkIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleLinkIds($index)
    {
        return isset($this->articleLinkIds[$index]);
    }

    /**
     * unset articleLinkIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleLinkIds($index)
    {
        unset($this->articleLinkIds[$index]);
    }

    /**
     * Gets as articleLinkIds
     *
     * @return ArticleLink[]
     */
    public function getArticleLinkIds()
    {
        return $this->articleLinkIds;
    }

    /**
     * Sets a new articleLinkIds
     *
     * @param ArticleLink[] $articleLinkIds
     * @return self
     */
    public function setArticleLinkIds(array $articleLinkIds)
    {
        $this->articleLinkIds = $articleLinkIds;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param AttributeValue $array
     * @return self
     */
    public function addToAttributeValues(AttributeValue $array)
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
     * @return AttributeValue[]
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * Sets a new attributeValues
     *
     * @param AttributeValue[] $attributeValues
     * @return self
     */
    public function setAttributeValues(array $attributeValues)
    {
        $this->attributeValues = $attributeValues;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param Attribute $array
     * @return self
     */
    public function addToAttributes(Attribute $array)
    {
        $this->attributes[] = $array;
        return $this;
    }

    /**
     * isset attributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributes($index)
    {
        return isset($this->attributes[$index]);
    }

    /**
     * unset attributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributes($index)
    {
        unset($this->attributes[$index]);
    }

    /**
     * Gets as attributes
     *
     * @return Attribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets a new attributes
     *
     * @param Attribute[] $attributes
     * @return self
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }


}

